<?php if (!defined('THINK_PATH')) exit();?>		<div class="wst-login-box" >
		     <div class="item">		           
		           <div class="item-ifo">
		               <span class='label'>账户名：</span>
		               <input id="loginName" name="loginName" class="text"  tabindex="1" value="<?php echo ($loginName); ?>" autocomplete="off" placeholder='用户名/手机号/邮箱' type="text"/>
		               <div class="ico name"></div>
		               <span id="loginName-tips" class="tips"></span>                       
		           </div>
		     </div>               
		     <div class="item">
		           <div class="item-ifo">  
		               <span class='label'>密码：</span>                     
		               <input id="loginPwd" name="loginPwd" class="text" tabindex="2" autocomplete="off" placeholder='密码' type="password"/>                      
		               <div class="ico pass"></div>
		               <span id="loginPwd-tips" class="tips"></span>            
		           </div>
		     </div>
		     <div class="item fore3 " id="o-authcode">
		           <div class="item-ifo">
		                <span class='label'>验证码：</span>
		                <input id="verify" style="ime-mode:disabled;width:100px" name="verify" class="text" tabindex="6" autocomplete="off" maxlength="6" type="text"/>
			            <label class="img">
			                <img style='vertical-align:middle;cursor:pointer;height:39px;' class='verifyImg' src='/Apps/Home/View/default/images/clickForVerify.png' title='刷新验证码' onclick='javascript:getVerify()'/> 
						</label>
						<span id="verify-tips" class="tips"></span>      	
		           </div>
		     </div>
		     <div class="item" style='height:30px;'>
		           <div class="item-ifo" style='height:30px;'>
		                <input style='margin-left:60px;' class="checkbox" id="rememberPwd" name="rememberPwd" checked="checked" type="checkbox"/>
		                <label class="mar">记住密码</label>&nbsp;&nbsp;
		                <label><a target='_blank' href="<?php echo U('Users/forgetPass');?>">忘记密码?</a></label>&nbsp;&nbsp;
		                <label><a target='_blank' href="<?php echo U('Home/Users/regist');?>" >免费注册</a></label>&nbsp;&nbsp;
		                <?php if($CONF['isOpenQQLogin'] == 1): ?><a id="qqAuthorizationUrl" href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=<?php echo ($CONF['qqAppId']); ?>&redirect_uri=<?php echo ($qqBackUrl); ?>" class="qq">
		                 		<img src="/Apps/Home/View/default/images/qq_logo.png" alt="QQ登录" border="0" height="30">
		                 	</a><?php endif; ?>
		              	<?php if($CONF['isOpenWxLogin'] == 1): ?><a id="qqAuthorizationUrl" href="https://open.weixin.qq.com/connect/qrconnect?appid=<?php echo ($CONF['wxAppId']); ?>&redirect_uri=<?php echo ($wxBackUrl); ?>&response_type=code&scope=snsapi_login&state=<?php echo time();?>#wechat_redirect" class="qq">
		                   		<img src="/Apps/Home/View/default/images/wx_logo.png" alt="微信登录" border="0" height="30">
		          			</a><?php endif; ?>
		                <div class="clr"></div>
		           </div>
		     </div>
		     <div class="item">
		          <input class="btn-img btn-entry" id="loginsubmit" value="登录" tabindex="8" onclick="checkUserLogin();"/>
		     </div>
		</div>