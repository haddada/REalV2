<?php
namespace sprint2\RealEstate\AdminBundle\Models;

/**
 * Description of Document
 *
 * @author Manoj
 */
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
 

class Document
{
    
    private $file;
    
    private $type;
    
    private $namex;
    
    private $subDir;
    
    private $filePersistencePath;
    
    /** @var string */
    protected static $uploadDirectory = '/wamp/www/';
    
    static public function setUploadDirectory($dir)
    {
        self::$uploadDirectory = $dir;
    }
    
    static public function getUploadDirectory()
    {
        if (self::$uploadDirectory === null) {
            throw new \RuntimeException("Trying to access upload directory for profile files");
        }
        return self::$uploadDirectory;
    }
    public function setSubDirectory($dir)
    {
         $this->subDir = $dir;
    }
    
    public function getSubDirectory()
    {
        if ($this->subDir === null) {
            throw new \RuntimeException("Trying to access sub directory for profile files");
        }
        return $this->subDir;
    }
    
   
    public function setFile(File $file , $type, $namex)
    {
        $this->file = $file;
        $this->type = $type;
        $this->namex = $namex;
    }
    
    public function getFile()
    {
        return new File(self::getUploadDirectory() . "/" . $this->filePersistencePath);
    }
    
     public function getOriginalFileName()
    {
        return $this->file->generateRandomString()."jpg";
    }
    
    public function getFilePersistencePath()
    {
        return $this->filePersistencePath;
    }
    
    public function processFile()
    {
        if (! ($this->file instanceof UploadedFile) ) {
            return false;
        }
        $uploadFileMover = new UploadFileMover();
        $this->filePersistencePath = $uploadFileMover->moveUploadedFile($this->file, self::getUploadDirectory(),$this->subDir, $this->type, $this->namex);
    }
    
    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    }



}
?>
