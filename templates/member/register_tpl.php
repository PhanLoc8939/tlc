
<script type="text/javascript">
	
$( document ).ready(function() {
	

		$('#btndangky1').click(function(){

		
			var frm = $('#frmDK1');
			 
                var value = frm.find('#emaildk1').val();     

			     var telephonePattern = /^09[0-9]{8}|01[0-9]{9}|08[0-9]{8}/;
                    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                    if(value=='')
                    {

                        $('#email-error').html('');
                         $("#emaildk1").after('<div for="email" generated="true" class="mage-error" id="email-error">VUi lòng nhập số điện thoại hoặc email .</div>');
                        frm.find('#emaildk1').val('');
                        return false;

                    }
                    if(value != '' && ((!telephonePattern.test(value) && !emailPattern.test(value)) || (telephonePattern.test(value) && value.match(telephonePattern)[0] != value))){
                        $('#email-error').html('');
                         $("#emaildk1").after('<div for="email" generated="true" class="mage-error" id="email-error">Số điện thoại hoặc email không đúng định dạng.</div>');
                        frm.find('#emaildk1').val('');
                        return false;
                    }
                    else
                    {
                        $('#email-error').html('');
                    }
            
                    var pass1 = frm.find('#passworddk1');
                    if(pass1.val()==''){

                            $('#pass-error').html('');
                             $("#passworddk1").after('<div for="email" generated="true" class="mage-error" id="email-error">Vui lòng nhập mật khẩu</div>');
                            return false;

                    }
                    if(pass1.val()!=''&& ( pass1.val().length <6 || pass1.val().length >32))

                    {


                          
                        $('#pass-error').html('');
                        $("#passworddk1").after('<div for="email" generated="true" class="mage-error" id="pass-error">Mật khẩu từ 6 đến 32 ký tự</div>');
                         pass1.val('');


                          return false;

                      }
                       else
                       {
                                $('#pass-error').html('');
                       }



                    var name = frm.find('#fullname1').val();
            
                    if(name==''){

                        $('#fullname-error').html('');
                        $("#fullname1").after('<div for="email" generated="true" class="mage-error" id="fullname-error">Vui lòng nhập họ tên</div>');
         
                        return false;


                    }
                   

                             name=name.trim();
                             var splValue = name.split(' ');

                            if(splValue.length < 2){

                                $('#fullname-error').html('');
                                $("#fullname1").after('<div for="email" generated="true" class="mage-error" id="fullname-error">Vui lòng nhập đầy đủ họ tên</div>');
                              
                                frm.find('#fullname1').val('');
                                return false;
                            }
                            else
                            {
                                $('#fullname-error').html('');
                            }


                
            frm.submit();
            return false;
		});
		 
});

</script>

<div id="page_register">

		<div class="main_form_register">

				<div id="lg_register">

        			<div class="main_content_sub_res">
        					<form action="dang-ky.html" method="post" id="frmDK1" name="frmDK1">
	        					<div class="block_more_login">
	        						<div class="space_bottom_10">Đăng ký tài khoản</div>
	        						<div class="form-group">
	        							<div class="relative">
	        								  <input name="emaildk" id="emaildk1" type="text" placeholder="Nhập email hoặc số điện thoại" class="form-control" >
	        									
                                            <i aria-hidden="true" class="fa fa-envelope-o"></i>
	        							</div>
	        						</div>
	        						<div class="form-group">
                                        <div class="relative">
                                            <input id="passworddk1" name="passworddk" autocomplete="off" type="password" placeholder="Nhập mật khẩu từ 6 - 32 ký tự" class="form-control" >
                                            <i aria-hidden="true" class="fa fa-lock"></i>
                                        </div>
                                       
                                
                                    </div>
                                    <div class="form-group">
                                        <div class="relative">
                                            <input id="fullname1" name="fullname" type="text" placeholder="Họ tên" class="form-control">
                                            <i aria-hidden="true" class="fa fa-user"></i>
                                        </div>
                                      
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="radio-inline"><input name="gender" checked="checked"  value="1" type="radio"> Nam </label>
                                        </div>
                                        <div class="col-lg-2">
                                            <label class="radio-inline"><input name="gender" value="2" type="radio"> Nữ </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                <select class="form-control" name="popup-date">
                                                    <option value="">Ngày</option>
                                                    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                <select class="form-control" name="popup-month">
                                                    <option value="">Tháng</option>
                                                    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group">
                                                <select class="form-control" name="popup-year">
                                                    <option value="">Năm</option>
                                                    <option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option>                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="checkbox-inline"><input name="is_subscribed" value="1" checked="checked" type="checkbox"> Nhận thông tin khuyến mãi qua e-mail </label>
                                    </div>

                                    <button id="btndangky1" name="btndangky" type="button" class="btn btn_site_1">Đăng ký</button>
	        					</div>
        					</form>
        			</div>

        		</div>
          	

		</div>
		<div class="block_register_page_login">
			<div class="space_bottom_5 txt_15">Bạn đã có tài khoản?</div>
			<a href="dang-nhap.html" class="btn1 btn_site_2">Đăng nhập</a>
		</div>

</div>