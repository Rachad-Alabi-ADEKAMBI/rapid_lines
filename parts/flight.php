<div class="tab-content" id="Flight">
              <form id="form_1" action="api/script.php?action=booking" method="POST">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="radio" name="name1" checked>
                      <span class="left">Standard</span>
                      <input type="radio" name="name1">
                      <span class="left">World Map</span> </div>
                  </div>
                
                  <div class="row"> <span class="left">Email</span>
                    <input type="email" class="input" name='email' placeholder="Email">
                  </div>
      

                  <div class="row"> <span class="left">From</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">To</span>
                    <input type="text" class="input">
                  </div>
                  <div class="wrapper">
                    <div class="col1">
                      <div class="row"> <span class="left">Outbound</span>
                        <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                      </div>
                      <div class="row"> <span class="left">Return</span>
                        <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                      </div>
                    </div>
                    <input type="text" class="input1 marg_top1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Adults</span>
                    <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Children</span>
                    <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                    <span class="pad_left1">(0-11 years)</span> 
                  </div>

                  <button class="button1 right mt-3 mb-3" type='submit'>
                        Search
                  </button>
                  </div>
              </form>
            </div>
            <div class="tab-content" id="Hotel">
              <form id="form_2" action="api/script.php?action=booking" method="POST">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="checkbox" checked>
                      Our Partners </div>
                  </div>

                  <div class="row"> <span class="left">Email</span>
                    <input type="email" class="input" name='email' placeholder="Email">
                  </div>
                  <div class="row"> <span class="left">Location</span>
                    <input type="text" class="input">
                  </div></div>
                  <div class="row"> <span class="left">Check-in </span>
                    <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Check-out </span>
                    <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Rooms</span>
                    <input type="text" class="input2" value="1"  onblur="if(this.value=='') this.value='1'" onFocus="if(this.value =='1' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Adults</span>
                    <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Children</span>
                    <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                    <span class="pad_left1">(0-11 years)</span> </div>
                  <div class="wrapper"> <span class="right relative">
                    <button class="button1 right ml-3">
                      Search
                    </button>
</div>
                  </form>
            </div>