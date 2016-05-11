<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 *  @Route("/blog")
 */
class BlogController extends Controller
{
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
          $articles = $repA->findAll();
          
        
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
        
        $repB = $this->getDoctrine()
                ->getManager()
                ->getRepository('AppBundle:Comment');
        
        $comments = $repB->findByArticle($article, ["date" => "DESC"] );
                
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
            
            return "";
        }
        catch (\PDOException $e){
     
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
        catch (\PDOException $e){
     
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
        $article = new Article();
        $article->setTitre("Hello world x !");
        $article->setContenu(" Xème édition de notre OPEN DU MUGUET
Et c'est !!!
Très peu de modificatinge pas une form tables ci-dessous... ....</strong>");
        $article->setAuteur("Monique DURAND");
        
        $image = new \AppBundle\Entity\Image();
        $image ->setAlt("Mon image");
        $image ->setUrl('https://robohash.org/'. md5(uniqid()));
        
        $article->setImage($image);     
        
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
  //Ecriture en base d'un objet
        $em->persist($article);
        try {
            $em->flush();
        }
        
 catch (\PDOException $e){
     
 }      

        $comm1 = new \AppBundle\Entity\Comment($article);
        $comm1->setContenu("Ceci est un commentaire 1");
        $comm1->setAuteur("FRANCOIS François");   
 
        $comm2 = new \AppBundle\Entity\Comment($article);
        $comm2->setContenu("Ceci est un commentaire 2");
        $comm2->setAuteur("MARC François");
 
        $em->persist($comm1);
        $em->persist($comm2);
        
        try {
            $em->flush();
        }
        
        catch (\PDOException $e){

        }      
 
        return $this->render('blog/add.html.twig', [
                'article' => $article,
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
}
