<?php
/**
 * Created by HBuilder.
 * User: HXW
 * Date: 16-12-9
 * Time: 下午14:55
 */
namespace Admin\Model;
use Think\Model;


class PicpathModel extends Model{
    protected $mediaPath;
    public  function __construct()
    {
        parent::__construct();
        $this->mediaPath=M('media');
    }

    public function postMedia(){
        $data=$this->mediaPath->select();
        return $data;
    }
   /* 
    public function updatepicpath($id,$picpath){
       $data['picpath']=$picpath;
       $rs=$this->picpath->where('id='.$id)->save($data);
        return $rs; 
    	}
    */ 
}