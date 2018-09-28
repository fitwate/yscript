<?php

class reguser{

        public $webname;
        public $username;
        public $username_readonly="";
        public $password;
        public $passwordinfo="";
        public $sex;
        public $sex0="";
        public $sex1="";
        public $sex2="";
        public $priv;
        public $priv0="";
        public $priv1="";
        public $priv2="";
        public $remark;
        public $amsub;

        function __construct($webname='注册页面',$username='zhangsan',$password='',$sex=2,$priv=2,$remark='这里输入',$amsub='a_u_sub'){
                $this->webname=$webname;
                $this->username=$username;
                $this->password=$password;
                $this->sex=$sex;
                $this->priv=$priv;
                $this->remark=$remark;
                $this->amsub=$amsub;
		
		if($this->webname!="注册页面"){
		$this->username_readonly='readonly';
                
                $this->passwordinfo='<tr><th></th><td><b>如果不需要修改密码，请勿输入!</b></td></tr>';
		}

		switch($sex){
			case 0:
			$this->sex0='checked';
			break;
			case 1:
			$this->sex1='checked';
			break;
			default:
			$this->sex2='checked';
		}
		
		switch($priv){
			case 1:
			$this->priv1='selected';
			break;
			case 2:
			$this->priv2='selected';
			break;
			default:
			$this->priv0='selected';
		}

        }
	
	
	function __tostring(){


		$str=<<<hello
		<html>
	<head>
	<title> $this->webname </title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>
		<table border="1" width="500" align="center" bgcolor="#aff3fa">
		<form name="frm" action="register.php"  method="post" title="这是表单">
			<caption>$this->webname</caption>
			
			<tr>
				<th>用户名</th>
				<td>
					<input type="text" name="username" size="30" maxlength="10" value="$this->username" $this->username_readonly>
				</td>
			</tr>
			<tr>
				<th></th>
				<td>
                                <b>用户名只能包含 数字 大小写字母 下划线(_)</b>
                                </td>
			</tr>
			<tr>
				<th>用户密码</th>
				<td>
					<input type="password" name="password" size="20" value="$this->password">
				</td>
			</tr>
			$this->passwordinfo
			<tr>
				<th>性别</th>
				<td>
					<input type="radio" name="sex" value="0" $this->sex0 > 男
					<input type="radio" name="sex" value="1" $this->sex1 > 女
					<input type="radio" name="sex" value="2" $this->sex2 > 保密
				</td>
			</tr>
			<tr>
                                <th>用户权限</th>
                                <td>
                                        <select name="priv">
                                                <option value="0" $this->priv0 >--请选择--</option>
                                                <option value="1" $this->priv1 >管理员</option>
                                                <option value="2" $this->priv2 >普通用户</option>
                                        </select>
                                </td>
                        </tr>
	
			<tr>
				<th>备注</th>
				<td>
					<textarea cols="40" rows="6" name="remark" maxlength="100">$this->remark</textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name=$this->amsub value="提交">
					<input type="reset">
				</td>
			</tr>
		</form>
		</table>
	</body>


	</html>
hello;

return $str;
}
}
?>
