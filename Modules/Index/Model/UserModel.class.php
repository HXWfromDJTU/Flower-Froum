<?php
/**
 * Created by HBuilder.
 * User: HXW
 * Date: 16-12-9
 * Time: 下午14:55
 */
namespace Index\Model;
use Think\Model;
class UserModel extends Model{
    protected $mediaPath;
    public  function __construct()
    {
        parent::__construct();
        $this->User=M('user');
    }
	/*postMedia方法用于插入media数据*/
    public function register($username, $password, $phoneNumber){
    	/*将接受的数据打包成$data，这里data的下标名字，需要与表中字段名称对应*/
    	$data['username']=$username;
		$data['password']=$password;
		$data['phoneNumber']=$phoneNumber;
		/*返回被操作的id*/
		$rs=$this->User->add($data);
        return $rs;
    }
	/*检查用户是否已经存在*/
	public function checkRepeat($username){
		/*返回被操作的id*/
		$rs=$this->User->where('username="'.$username.'"')->find();
        return $rs;
    }
	public function findPsd($username){
    	/*将接受的数据打包成$data，这里data的下标名字，需要与表中字段名称对应*/
    	/*$data['username']=$username;*/
		/*返回被操作的id*/
		/*注意给数据库传送字段的时候，字符串的都需要加上双引号，负责会出现数据库字段不存在错误*/
		$rs=$this->User->where('username="'.$username.'"')->field('id,password')->select();
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $rs;
    }
	/*从数据库中选出对应的头像*/
	public function findImg($username){
		$rs=$this->User->where('username="'.$username.'"')->field('nickname,headImgSrc')->select();
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $rs;
    }
	/*从数据库中选出对应的用户信息，对应main页面的me页面*/
	public function loadMyMessage($username){
		/*注意给数据库传送字段的时候，字符串的都需要加上双引号，负责会出现数据库字段不存在错误*/
		$rs=$this->User->where('username="'.$username.'"')->field('nickname,headImgSrc,bgImg,follow,follower')->select();
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $rs;
    }
	/*从数据库中选出对应的用户信息，对应main页面的me页面*/
	public function updateAvatar($username,$base64){
		$data['headImgSrc']=$base64;
		/*注意给数据库传送字段的时候，字符串的都需要加上双引号，负责会出现数据库字段不存在错误*/
		$rs=$this->User->where('username="'.$username.'"')->save($data);
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $rs;
    }
	/*从数据库中选出对应的用户信息，对应main页面的me页面*/
	public function loadAuthorMSG($authorID){
		$data['id']=$authorID;
		/*注意给数据库传送字段的时候，字符串的都需要加上双引号，负责会出现数据库字段不存在错误*/
		$rs=$this->User->field('headImgSrc,nickname')->where($data)->select();
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $rs;
    }
	
	public function editMyMSG($userID, $nickname, $phoneNumber,$city,$introduction){
    	/*将接受的数据打包成$data，这里data的下标名字，需要与表中字段名称对应*/
    	$data['nickname']=$nickname;
		$data['city']=$city;
		$data['phoneNumber']=$phoneNumber;
		$data['introduction']=$introduction;
		/*返回被操作的id*/
		$rs=$this->User->where('id="'.$userID.'"')->save($data);
        return $rs;
    }
}