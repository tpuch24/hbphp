<?php

namespace AppBundle\Repository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function getCountArticlesIndex($page, $pas) {
        
        $pub=1;
        $offset = ($page-1)*$pas;
        
        
        $qb= $this->createQueryBuilder("a")
             ->leftJoin("a.image", "i")
             ->addSelect("i")
             ->leftJoin("a.categories", "c")
             ->addSelect("c")
             ->setParameter("pub", $pub)
             ->where("a.publication = :pub")         
             
             ->orderBy("a.date","DESC");
        
        $qb->setFirstResult($offset);
        $qb->setMaxResults($pas);
        
        $query = $qb->getQuery();
        
        return $query->getResult();
        //return $query->getArrayResult();
                
    }
    
    public function getArticlesIndex($page, $pas) {
        //$qb= $this->createQueryBuilder("a");
        
        //equivalent a
        //$qb=$this->_em->createQueryBuilder()->select("a")->from("$this->_entityName"AppBundle:Article", "a"); //
        //equivalent a
        //$qb=$this->_em->createQueryBuilder()->select("a")->from($this->_entityName, "a"); //
        $pub = 1;
        $offset = ($page-1)*$pas;
        
        
        $qb= $this->createQueryBuilder("a")
             ->leftJoin("a.image", "i")
             ->addSelect("i")
             ->leftJoin("a.categories", "c")
             ->addSelect("c")
             ->setParameter("pub", $pub)
             ->where("a.publication = :pub")         
             
             ->orderBy("a.date","DESC");
        
        $qb->setFirstResult($offset);
        $qb->setMaxResults($pas);
        
        $query = $qb->getQuery();
        
        return new \Doctrine\ORM\Tools\Pagination\Paginator($query);
        //return $query->getResult();
        //return $query->getArrayResult();
                
    }
    
    public function getArticlesByCategorie($categorie) {

        $pub = 1;
        
        $qb= $this->createQueryBuilder("a")
             ->leftJoin("a.image", "i")
             ->addSelect("i")
             ->leftJoin("a.categories", "c")
             ->where("a.publication = :pub")           
             ->andWhere(" c = :cat")
             ->setParameter("pub", $pub)
             ->setParameter("cat", $categorie)
             ->orderBy("a.date","DESC");
        
        
        $query = $qb->getQuery();
        
        return $query->getResult();
        //return $query->getArrayResult();
                
    }
    
    public function getCountArticlesByCategorie($categorie) {

        $pub = 1;
        
        $qb= $this->createQueryBuilder("a")
             ->leftJoin("a.categories", "c")
             ->select("COUNT(a)")
             ->where("a.publication = :pub")           
             ->andWhere(" c = :cat")
             ->setParameter("pub", $pub)
             ->setParameter("cat", $categorie)
             ->orderBy("a.date","DESC");
        
        return $qb->getQuery()->getSingleScalarResult();
        //return $query->getArrayResult();
                
    }
}
