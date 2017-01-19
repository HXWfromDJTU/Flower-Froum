<?php
/**
 * Created by HBuilder.
 * User: HXW
 * Date: 16-12-9
 * Time: 下午14:55
 */
namespace Index\Model;
use Think\Model;
class CommentModel extends Model{
    protected $commentPath;
    public  function __construct()
    {
        parent::__construct();
        $this->User=M('comment');
		$this->UserInfo=M('user');
    }
	/*从数据库中选出对应的用户信息，对应main页面的me页面*/
	public function loadCommentInfo($essayID){
		$data['toMediaID']=$essayID;
		/*注意给数据库传送字段的时候，字符串的都需要加上双引号，负责会出现数据库字段不存在错误*/
		$rs=$this->User->join('user ON user.id=comment.fromUserID')->field('headImgSrc,nickname,content,commentTime')->where($data)->select();
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $rs;
    }
	
	public function pushComment($essayID,$username,$content,$commentTime){
		$userInfo=$this->UserInfo->where('username="'.$username.'"')->field('id,nickname,headImgSrc')->select();
		$data['toMediaID']=$essayID;
		$data['fromUserID']=$userInfo[0]["id"];
		$data['content']=$content;
		$data['commentTime']=$commentTime;
		/*注意给数据库传送字段的时候，字符串的都需要加上双引号，负责会出现数据库字段不存在错误*/
		$rs	=	$this->User->add($data);
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $userInfo;
    }
}