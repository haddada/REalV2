<?php
namespace sprint2\realEstateBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class AdresseRepository extends EntityRepository

{

    public function findGouvernorat($lim)
    {

	   $qb=$this->createQueryBuilder('a')
	   ->select('a.gouvernorat')
	   ->distinct();
	   $qb->setMaxResults($lim);
	    return $qb	
	    ->getQuery()    
	    ->getResult()
  		;
  	}

  	public function findvilleDistinct(){

	   $qb=$this->createQueryBuilder('a')
	   ->select('a.ville')
	   ->distinct();
	   $qb->setMaxResults(80);
	    return $qb	
	    ->getQuery()    
	    ->getResult()
  		;
  	}

  	public function findvilleGouvernorat($gouvernorat){
  		$qb=$this->createQueryBuilder('a')
	   ->select('a.ville')
	   ->distinct()
	   ->where('a.gouvernorat = :gouvernorat')
	   ->setParameter('gouvernorat',$gouvernorat['gouvernorat']);

	    return $qb	
	    ->getQuery()    
	    ->getResult()
  		;

  	}

  	public function findCodeVille($ville){
  		$qb=$this->createQueryBuilder('a')
	   ->select('a.codepostal')
	   ->where('a.ville = :ville')
	   ->setParameter('ville',$ville['ville']);

	    return $qb	
	    ->getQuery()    
	    ->getResult()
  		;

  	}

  	public function findCode($codepostal){
  		$qb=$this->createQueryBuilder('a')
	   ->select('a')
	   ->where('a.ville = :codepostal')
	   ->setParameter('codepostal','ariana');

	    return $qb	
	    ->getQuery()    
	    ->getResult()
  		;
  	}



}
   