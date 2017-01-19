<?php
/**
 * Created by HBuilder.
 * User: HXW
 * Date: 16-12-9
 * Time: 下午14:55
 */
namespace Index\Model;
use Think\Model;
class ActivityModel extends Model{
    protected $commentPath;
    public  function __construct()
    {
        parent::__construct();
        $this->Activity=M('activity');
		$this->UserInfo=M('user');
    }
	/*从数据库中选出对应的用户信息，对应main页面的me页面*/
	public function loadActivity(){
		/*选出action目标对象是登录用户，但是操作用用户却不是登录用户的消息*/
		$rs=$this->Activity->select();
			
		/*$rs=array_merge($rs1,$rs2);*/
        return $rs;
    }

}