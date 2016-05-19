<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Thierry\CatalogueBundle\Controller;

use Thierry\CatalogueBundle\Entity\Article;
use Thierry\CatalogueBundle\Entity\Note;
use Thierry\CatalogueBundle\Form\ArticleType;
use Thierry\CatalogueBundle\Form\NoteType;
use PDOException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of CatalogueController
 *
 * @author thierry
 */
class CatalogueController extends Controller
{
    /**
     * @Route("/{page}", name="cat_index",
     * defaults={"page":1}, requirements={"page":"\d+"}
     * )
     */
    public function indexAction($page)
    {
        $pagination_ind = 3; 
    
        $doctrine = $this->getDoctrine();

        $em = $doctrine->getManager();
        $repA = $em->getRepository('ThierryCatalogueBundle:Article');

        
        $articles = $repA->getArticlesIndex($page, $pagination_ind);
        
        $c = count($articles);
//        foreach ($paginator as $post) {
//            echo $post->getHeadline() . "\n";
//        }
         $nbpages= ceil($c / $pagination_ind);
         $extrait = $this->get('service_extractresume');
         foreach ($articles as $article){
             $article->setResume($extrait->getExtrait($article->getContenu(), 20));
         }
        return $this->render('ThierryCatalogueBundle:cat:index.html.twig', [
            'page' => $page, 'articles' => $articles, 'nbpages'=> $nbpages
        ]);
        
    }
    
    /**
     * @Route("/detail/{id}", name="cat_detail")
     * @Method("GET")
     */
    public function detailAction(Request $request, $id)
    {
        $repA = $this->getDoctrine()
                ->getManager()
                ->getRepository('ThierryCatalogueBundle:Article');
        
        $article = $repA->find($id);
        
        $repC = $this->getDoctrine()
                ->getManager()
                ->getRepository('ThierryCatalogueBundle:Note');
        
        $notes = $repC->findByArticle($article, ["date" => "DESC"] );
                
        $noteavenir = new Note($article);
        
        $form= $this->createForm(\Thierry\CatalogueBundle\Form\NoteType::class, $noteavenir);
        
        $session = $this->get('session');
        
        
        return $this->render('ThierryCatalogueBundle:cat:detail.html.twig', [
            'article' => $article, 'notes' => $notes,
            'form' => $form->createView(),
        ]);
        
    }
    
    
    
    
    
    
    /**
     * @Route("/detail/{id}", name="cat_detail_post")
     * @Method("POST")
     */
    public function detailPostAction(Request $request, $id)
    {
        $repA = $this->getDoctrine()->getManager()->getRepository('ThierryCatalogueBundle:Article');
        
        $article = $repA->find($id);
   
        $noteavenir = new Note($article);
        
        $form= $this->createForm(\Thierry\CatalogueBundle\Form\NoteType::class, $noteavenir);
        
        $session = $this->get('session');
        
        if ($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isvalid()){
                //$article->setOwner();
                $em = $this->getDoctrine()->getManager();
                $em->persist($noteavenir);
              //$article->setImage($image);     

                try {
                    $em->flush();
                    
                    //$session->getFlashBag()->add('info', 'Note enregistrée');

                    return $this->redirectToRoute('cat_detail',['id' => $id]);
                    
                } catch (\Exception $ex) {
                    $session->getFlashBag()->add('erreur', ' a refaire: '.$ex->getMessage());
                    return $this->redirectToRoute('cat_detail',['id' => $id]);
                }
            }
        }

        return $this->render('ThierryCatalogueBundle:cat:detail.html.twig', [
            'article' => $article, 'comments' => $comments,
            'form' => $form->createView(),
        ]);
        
    }
    
    /**
     * @Route("/modify/{id}", name="cat_modify",
     * defaults={"id":1}, requirements={"id":"\d+"})
     * @Method("GET")
     */
    public function modifyAction(Request $request, $id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repA = $em->getRepository('ThierryCatalogueBundle:Article');

        //Lecture article
        $article = $repA->find($id);
        
        $form= $this->createForm(\Thierry\CatalogueBundle\Form\ArticleType::class, $article);
        
        $session = $this->get('session');
        

        return $this->render('ThierryCatalogueBundle:cat:modify.html.twig', [
                'id' => $id,
                'form' => $form->createView(),
        ]);
        
    }
    
    /**
     * @Route("/modify/{id}", name="cat_modify_Post",
     * defaults={"id":1}, requirements={"id":"\d+"})
     * @Method ("POST")
     */
    public function modifyPostAction(Request $request, $id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repA = $em->getRepository('ThierryCatalogueBundle:Article');

        //Lecture article
        $article = $repA->find($id);
        $form= $this->createForm(\Thierry\CatalogueBundle\Form\ArticleType::class, $article);
        $session = $this->get('session');
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isvalid()){
            //$article->setOwner();
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);

          //$article->setImage($image);     

            try {
                $em->flush();
                //$session->getFlashBag()->add('info', 'Article modifié');

                return $this->redirectToRoute('cat_detail',['id' => $id]);

            } catch (\Exception $ex) {
                $session->getFlashBag()->add('erreur modification', ' a refaire: '.$ex->getMessage());
                return $this->redirectToRoute('cat_modify',['id' => $id]);
            }
       }

        return $this->render('ThierryCatalogueBundle:cat:modify.html.twig', [
                'id' => $id,
                'form' => $form->createView(),
        ]);
        
    }
    /**
     * @Route("/delete/{id}", name="cat_delete",
     * defaults={"id":1}, requirements={"id":"\d+"})
     */
    public function deleteAction(Request $request, $id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repA = $em->getRepository('ThierryCatalogueBundle:Article');
        
        //Lecture article
          $article = $repA->find($id);
        //Suppression en base d'un objet
        $em->remove($article);
        try {
            $em->flush();
            
            return "";
        }
        catch (PDOException $e){
         }

        return $this->render('ThierryCatalogueBundle:cat:delete.html.twig', [
            'id' => $id,
        ]);
    }

    /**
     * @Route("/add", name="cat_add",)
     */
    public function addAction(Request $request)
    {
        //Creation d'un formulaire à partir de l'entité
        // puis getForm() pour generer les élements de fond
        // puis createView() pour generer le HTML correspondant
        $article = new Article();   
        
        $form= $this->createForm(\Thierry\CatalogueBundle\Form\ArticleType::class, $article);
        
        $session = $this->get('session');
        
        if ($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isvalid()){
                //$article->setOwner();
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                
              //$article->setImage($image);     

                try {
                    $em->flush();
                    
                    //$session->getFlashBag()->add('info', 'Article enregistré');
                    //$session->getFlashBag()->add('info', ' avec succés');

                    return $this->redirectToRoute('cat_detail');
                    
                } catch (\Exception $ex) {
                    $session->getFlashBag()->add('erreur', ' a refaire: '.$ex->getMessage());
                    return $this->redirectToRoute('cat_add');
                }
                
            }
        }
        
        
        return $this->render('ThierryCatalogueBundle:cat:add.html.twig', [
                'form' => $form->createView(),
                ]);
        
    }

    
    public function footerAction(Request $request)
    {
         $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repA = $em->getRepository('ThierryCatalogueBundle:Article');
        
        //Lecture article
          $articles = $repA->findBy(["publication"=> true, ],["date" => "dESC", ],3);
          
        
        return $this->render('ThierryCatalogueBundle:cat:footer.html.twig',  [
            'articles' => $articles
        ]);
        
    }
    
    
      /**
     * @Route("/categorie/{id}", name="cat_categorie",
     * )
     */
    public function categorieAction(Request $request, $id)
    {          
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repCa = $em->getRepository('ThierryCatalogueBundle:Categorie');
        
        $categorie = $repCa->find($id);
        $repA = $em->getRepository('ThierryCatalogueBundle:Article');
        
        return $this->render('ThierryCatalogueBundle:cat:categorie.html.twig', [
            'titre' => $categorie->getTitre(), 'articles' => $repA->getArticlesByCategorie($categorie), 'count' =>$repA->getCountArticlesByCategorie($categorie)
        ]);
        
    }
 
}