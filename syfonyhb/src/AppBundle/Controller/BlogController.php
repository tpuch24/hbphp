<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use PDOException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 *  @Route("/blog")
 */
class BlogController extends Controller
{

    const PAGINATION_IND = 5; 
    const PAGINATION_CAT = 2; 

    /**
     * @Route("/index", name="blog_index",
     * defaults={"page":1}, requirements={"page":"\d+"}
     * )
     */
    public function indexAction(Request $request, $page)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repA = $em->getRepository('AppBundle:Article');
        
        //Lecture article
          //$articles = $repA->findAll();
          
        $articles = $repA->getArticlesIndex();
          
        return $this->render('blog/index.html.twig', [
            'page' => $page, 'articles' => $articles
        ]);
        
    }
    
    /**
     * @Route("/detail/{id}", name="blog_detail")
     */
    public function detailAction(Request $request, $id)
    {
        $repA = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Article');
        
        $article = $repA->find($id);
        
        $repC = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Comment');
        
        $comments = $repC->findByArticle($article, ["date" => "DESC"] );
                
        return $this->render('blog/detail.html.twig', [
            'article' => $article, 'comments' => $comments,
        ]);
        
    }
    
    /**
     * @Route("/modify/{id}", name="blog_modify",
     * defaults={"id":1}, requirements={"id":"\d+"})
     */
    public function modifyAction(Request $request, $id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repA = $em->getRepository('AppBundle:Article');
        
        
        //Lecture article
          $article = $repA->find($id);
          $article->setTitre("Update - ".$article->getTitre());
        //Update en base d'un objet
        try {
            $em->flush();
        }
        catch (PDOException $e){
     
         }

        return $this->render('blog/modify.html.twig', [
            'id' => $id,
        ]);
        
    }
    
    /**
     * @Route("/delete/{id}", name="blog_delete",
     * defaults={"id":1}, requirements={"id":"\d+"})
     */
    public function deleteAction(Request $request, $id)
    {
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repA = $em->getRepository('AppBundle:Article');
        
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

        return $this->render('blog/delete.html.twig', [
            'id' => $id,
        ]);
    }

    /**
     * @Route("/add", name="blog_add",)
     */
    public function addAction(Request $request)
    {
//        $article = new Article();
//        $article->setTitre("Hello world x +2 !");
//        $article->setContenu(" Xème édition de notre OPEN DU MUGUET
//Et c'est !!!
//Très peu de modificatinge pas une form tables ci-dessous... ....</strong>");
//        $article->setAuteur("Monique DURAND");
//        
//        $image = new \AppBundle\Entity\Image();
//        $image ->setAlt("Mon image");
//        $image ->setUrl('https://robohash.org/'. md5(uniqid()));
//        
//        $article->setImage($image);     
//        
//        $doctrine = $this->getDoctrine();
//        $em = $doctrine->getManager();
//        
//        $cat1 = new \AppBundle\Entity\Categorie("Tutorial");
//        $cat2 = new \AppBundle\Entity\Categorie("Funny");
//        
//        $article->addCategory($cat1);
//        $article->addCategory($cat2);
//        
//        
//      //Ecriture en base des objets categories
//        $em->persist($cat1);
//        $em->persist($cat2);        
//        try {
//            $em->flush();
//        }
//        catch (\PDOException $e){
//        }      
//
//      //Ecriture en base d'un objet  article
//        $em->persist($article);
//        try {
//            $em->flush();
//        }
//        catch (\PDOException $e){
//        }      
//
//        $comm1 = new \AppBundle\Entity\Comment($article);
//        $comm1->setContenu("Ceci est un commentaire 1");
//        $comm1->setAuteur("FRANCOIS François");   
// 
//        $comm2 = new \AppBundle\Entity\Comment($article);
//        $comm2->setContenu("Ceci est un commentaire 2");
//        $comm2->setAuteur("MARC François");
// 
//        $em->persist($comm1);
//        $em->persist($comm2);
//        

//        try {
//            $em->flush();
//        }
//       
//        catch (\PDOException $e){
//
//        }      
// 
//        return $this->render('blog/add.html.twig', [
//                'article' => $article,
//                ]);
        
        //Creation d'un formulaire à partir de l'entité
        // puis getForm() pour generer les élements de fond
        // puis createView() pour generer le HTML correspondant
        $article = new Article();
        
        
        
//        
//        $formBuilder = $this->createFormBuilder($article)
//        ->add("titre", Type\TextType::class)
//        ->add("auteur", Type\TextType::class)
//        ->add("contenu", Type\TextareaType::class)
//        ->add("date", Type\DateType::class)
//        ->add("publication", Type\CheckboxType::class,
//                ['required' => false])
//        
//        ->add("submit", Type\SubmitType::class,
//                ['label' => 'Ajouter'])
//        ;        
//        
//        $form = $formBuilder->getForm();
//        
        
        $form= $this->createForm(ArticleType::class, $article);
        
        $session = $this->get('session');
        
        if ($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isvalid()){
                //$article->setOwner();
                $em = $this->getDoctrine()->getManager();
                $em->persist($article);
                
                //Ajout image - ancien
                 
//                $image = new \AppBundle\Entity\Image();
//                $image ->setAlt("une image");
//                $image ->setUrl('https://robohash.org/'. md5(uniqid()));
//
//                $article->setImage($image);     

                try {
                    $em->flush();
                    return $this->redirectToRoute('blog_detail');
                    
                } catch (Exception $ex) {

                }
            }
        }
        
        
        return $this->render('blog/add.html.twig', [
                'form' => $form->createView(),
                ]);
        
    }

    
    public function footerAction(Request $request)
    {
         $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repA = $em->getRepository('AppBundle:Article');
        
        //Lecture article
          $articles = $repA->findBy(["publication"=> true, ],["date" => "dESC", ],3);
          
        
        return $this->render('blog/footer.html.twig',  [
            'articles' => $articles
        ]);
        
    }
    
    
      /**
     * @Route("/categorie/{id}", name="blog_categorie",
     * )
     */
    public function categorieAction(Request $request, $id)
    {          
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repCa = $em->getRepository('AppBundle:Categorie');
        
        $categorie = $repCa->find($id);
        $repA = $em->getRepository('AppBundle:Article');
        
        return $this->render('blog/categorie.html.twig', [
            'titre' => $categorie->getTitre(), 'articles' => $repA->getArticlesByCategorie($categorie), 'count' =>$repA->getCountArticlesByCategorie($categorie)
        ]);
//        return $this->render('blog/categorie.html.twig', [
//            'titre' => $categorie->getTitre(), 'articles' => $categorie->getArticles()
//        ]);
        
    }
 
}
