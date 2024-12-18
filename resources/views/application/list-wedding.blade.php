@extends('application.layouts.applicationlayout')
@section('pageTitle','Check List')

@section('content')
<section class="black-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a href="{{route('/')}}"><img src="{{asset('/user/images/logo_white.png')}}"></a>
               </div>
            </div>
         </div>
      </section>
      <section class="check-list">
         <div class="container">
            <div class="content">
               <form action="" method="POST" accept-charset="utf-8" id="" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-md-12">
                     <h2>Wedding</h2>
                  </div>
               </div>
               
               <div class="row">
               <input type="hidden" name="event" id="event" value="1">
               
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>WEDDING PHOTOGRAPHY</h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==1)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="1" name="1" value="1"/>
                              <label class="checkbox" for="1">Candid Photography</label>
                           </div>
                        @endif
                        @if($data['item'] ==2)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="2" name="2" value="2"/>
                              <label class="checkbox" for="2">Candid Videography</label>
                           </div>
                        @endif
                        @if($data['item'] ==3)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="3" name="3" value="3"/>
                              <label class="checkbox" for="3">Traditional Photography</label>
                           </div>
                           @endif
                        @if($data['item'] ==4)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="4" name="4" value="4"/>
                              <label class="checkbox" for="4" >Traditional Videography</label>
                           </div>
                           @endif
                        @if($data['item'] ==5)
                           <div class="checkbox-container">
                              <input type="checkbox" checked value="5" name="5" id="5" />
                              <label class="checkbox" for="5" >Pre wedding Photoshoot</label>
                           </div>
                           @endif
                        @if($data['item'] ==6)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="6" name="6" value="6"/>
                              <label class="checkbox" for="6" >Post wedding Photoshoot</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>FIRST THINGS </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==7)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="7" name="7" value="7"/>
                              <label class="checkbox" for="7">Venue</label>
                           </div>
                           @endif
                           @if($data['item'] ==8)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="8" name="8" value="8"/>
                              <label class="checkbox" for="8">Invitation cards</label>
                           </div>
                           @endif
                           @if($data['item'] ==9)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="9" name="9" value="9"/>
                              <label class="checkbox" for="9">Designing </label>
                           </div>
                           @endif
                           @if($data['item'] ==10)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="10" name="10" value="10"/>
                              <label class="checkbox" for="10">Postage</label>
                           </div>
                           @endif
                           @if($data['item'] ==11)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="11" name="11" value="11"/>
                              <label class="checkbox" for="11">Save the date cards</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
                
               
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>STAGE & DECOR </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==12)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="12" name="12" value="12"/>
                              <label class="checkbox" for="12">Stage</label>
                           </div>
                           @endif
                           @if($data['item'] ==13)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="13" name="13" value="13"/>
                              <label class="checkbox" for="13">Entrance Board</label>
                           </div>
                           @endif
                           @if($data['item'] ==14)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="14" name="14" value="14"/>
                              <label class="checkbox" for="14">Entrance Arch </label>
                           </div>
                           @endif
                           @if($data['item'] ==15)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="15" name="15" value="15"/>
                              <label class="checkbox" for="15">Aisle</label>
                           </div>
                           @endif
                           @if($data['item'] ==16)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="16" name="16" value="16"/>
                              <label class="checkbox" for="16">Walk way flowering</label>
                           </div>
                           @endif
                           @if($data['item'] ==17)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="17" name="17" value="17"/>
                              <label class="checkbox" for="17">Chader</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
                  
                  
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>LIGHT SYSTEM </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==18)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="18" name="18" value="18"/>
                              <label class="checkbox" for="18">Light System</label>
                           </div>
                           @endif
                        @endforeach
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>SOUND SYSTEM </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==19)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="19" name="19" value="19"/>
                              <label class="checkbox" for="19">Sound System</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>PAMPERING</h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==20)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="20" name="20" value="20"/>
                              <label class="checkbox" for="20">Hairdresser</label>
                           </div>
                           @endif
                           @if($data['item'] ==21)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="21" name="21" value="21"/>
                              <label class="checkbox" for="21">Makeup Artist</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>


                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>AFTER WARDS</h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==22)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="22" name="22" value="22"/>
                              <label class="checkbox" for="22">Transportation</label>
                           </div>
                           @endif
                           @if($data['item'] ==23)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="23" name="23" value="23"/>
                              <label class="checkbox" for="23">Car and rental for
                              Bride and groom</label>
                           </div>
                           @endif
                           @if($data['item'] ==24)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="24" name="24" value="24"/>
                              <label class="checkbox" for="24">Security </label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>

               <!-- <div class="front-back"></div> -->
               <div class="row">
                  <div class="col-md-12">
                     <h2>Reception Checklist</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>PHOTOGRAPHY</h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==25)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="25" name="25" value="25"/>
                              <label class="checkbox" for="25">Candid Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==26)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="26" name="26" value="26"/>
                              <label class="checkbox" for="26">Candid Videography</label>
                           </div>
                           @endif
                           @if($data['item'] ==27)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="27" name="27" value="27"/>
                              <label class="checkbox" for="27">Traditional Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==28)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="28" name="28" value="28"/>
                              <label class="checkbox" for="28">Traditional Videography</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>FIRST THINGS </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==29)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="29" name="29" value="29"/>
                              <label class="checkbox" for="29">Venue</label>
                           </div>
                           @endif
                           @if($data['item'] ==30)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="30" name="30" value="30"/>
                              <label class="checkbox" for="30">Invitation cards</label>
                           </div>
                           @endif
                           @if($data['item'] ==31)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="31" name="31" value="31"/>
                              <label class="checkbox" for="31">Designing </label>
                           </div>
                           @endif
                           @if($data['item'] ==32)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="32" name="32" value="32"/>
                              <label class="checkbox" for="32">Postage</label>
                           </div>
                           @endif
                           @if($data['item'] ==33)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="33" name="33" value="33"/>
                              <label class="checkbox" for="33">Save the date cards</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>STAGE & DECOR </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==34)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="34" name="34" value="34"/>
                              <label class="checkbox" for="34">Stage</label>
                           </div>
                           @endif
                           @if($data['item'] ==35)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="35" name="35" value="35"/>
                              <label class="checkbox" for="35">Entrance Board</label>
                           </div>
                           @endif
                           @if($data['item'] ==36)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="36" name="36" value="36"/>
                              <label class="checkbox" for="36">Entrance Arch </label>
                           </div>
                           @endif
                           @if($data['item'] ==37)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="37" name="37" value="37"/>
                              <label class="checkbox" for="37">Aisle</label>
                           </div>
                           @endif
                           @if($data['item'] ==38)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="38" name="38" value="38"/>
                              <label class="checkbox" for="38">Walk way flowering</label>
                           </div>
                           @endif
                           @if($data['item'] ==39)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="39" name="39" value="39"/>
                              <label class="checkbox" for="39">Tiffani Chairs</label>
                           </div>
                           @endif
                           @if($data['item'] ==40)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="40" name="40" value="40"/>
                              <label class="checkbox" for="40">Table and arrangements</label>
                           </div>
                           @endif
                           @if($data['item'] ==41)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="41" name="41" value="41"/>
                              <label class="checkbox" for="41">Chader</label>
                           </div>
                           @endif
                           @if($data['item'] ==42)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="42" name="42" value="42"/>
                              <label class="checkbox" for="42">Cool fire</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>LIGHT SYSTEM </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==43)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="43" name="43" value="43"/>
                              <label class="checkbox" for="43">LED Par</label>
                           </div>
                           @endif
                           @if($data['item'] ==44)
                           <div class="checkbox-container"> 
                              <input type="checkbox" checked id="44" name="44" value="44"/>
                              <label class="checkbox" for="44">Pin spot</label>
                           </div>
                           @endif
                           @if($data['item'] ==45)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="45" name="45" value="45"/>
                              <label class="checkbox" for="45">Warm MH light</label>
                           </div>
                           @endif
                           @if($data['item'] ==46)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="46" name="46" value="46"/>
                              <label class="checkbox" for="46">Warm way light</label>
                           </div>
                           @endif
                           @if($data['item'] ==47)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="47" name="47" value="47"/>
                              <label class="checkbox" for="47">Mirchi lights</label>
                           </div>
                           @endif
                           @if($data['item'] ==48)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="48" name="48" value="48"/>
                              <label class="checkbox" for="48">Chain bulb</label>
                           </div>
                           @endif
                           @if($data['item'] ==49)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="49" name="49" value="49"/>
                              <label class="checkbox" for="49">Hanging bulb</label>
                           </div>
                           @endif
                           @if($data['item'] ==50)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="50" name="50" value="50"/>
                              <label class="checkbox" for="50">Face light</label>
                           </div>
                           @endif
                           @endforeach

                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>SOUND SYSTEM </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==51)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="51" name="51" value="51"/>
                              <label class="checkbox" for="51">Cordless mic</label>
                           </div>
                           @endif
                           @if($data['item'] ==52)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="52" name="52" value="52"/>
                              <label class="checkbox" for="52">Music</label>
                           </div>
                           @endif
                           @if($data['item'] ==53)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="53" name="53" value="53"/>
                              <label class="checkbox" for="53">D.J and other entertainment</label>
                           </div>
                           @endif
                           @if($data['item'] ==54)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="54" name="54" value="54"/>
                              <label class="checkbox" for="54">Reception band</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>PAMPERING</h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==55)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="55" name="55" value="55"/>
                              <label class="checkbox" for="55">Hairdresser</label>
                           </div>
                           @endif
                           @if($data['item'] ==56)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="56" name="56" value="56"/>
                              <label class="checkbox" for="56">Makeup Artist</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>


                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>AFTER WARDS</h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==57)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="57" name="57" value="57"/>
                              <label class="checkbox" for="57">Transportation</label>
                           </div>
                           @endif
                           @if($data['item'] ==58)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="58" name="58" value="58"/>
                              <label class="checkbox" for="58">Car and rental for
                              Bride and groom</label>
                           </div>
                           @endif
                           @if($data['item'] ==59)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="59" name="59" value="59"/>
                              <label class="checkbox" for="59">Security </label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>



               <div class="row">
                  <div class="col-md-12">
                     <h2>Sangeet Ceremony Checklist</h2>
                  </div>
               </div>
               <div class="row">
               
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>Our services include </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==60)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="60"  name="60" value="60"/>
                              <label class="checkbox" for="60">Candid Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==61)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="61"  name="61" value="61"/>
                              <label class="checkbox" for="61">Candid Videography</label>
                           </div>
                           @endif
                           @if($data['item'] ==62)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="62"  name="62" value="62"/>
                              <label class="checkbox" for="62">Traditional Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==63)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="63"  name="63" value="63"/>
                              <label class="checkbox" for="63">Traditional Videography</label>
                           </div>
                           @endif
                           @if($data['item'] ==64)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="64"  name="64" value="64"/>
                              <label class="checkbox" for="64">Venue management</label>
                           </div>
                           @endif
                           @if($data['item'] ==65)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="65"  name="65" value="65"/>
                              <label class="checkbox" for="65">Theme decoration</label>
                           </div>
                           @endif
                           @if($data['item'] ==66)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="66"  name="66" value="66"/>
                              <label class="checkbox" for="66">Light system</label>
                           </div>
                           @endif
                           @if($data['item'] ==67)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="67"  name="67" value="67"/>
                              <label class="checkbox" for="67">Sound system</label>
                           </div>
                           @endif
                           @endforeach

                        </div>
                     </div>
                  </div>

               </div>


               <div class="row">
                  <div class="col-md-12">
                     <h2>Bridal Shower Party Checklist</h2>
                  </div>
               </div>
               <div class="row">
               
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>Our services include </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==68)
                        <div class="checkbox-container">
                              <input type="checkbox" checked id="68"  name="68" value="68"/>
                              <label class="checkbox" for="68">Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==69)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="69"  name="69" value="69"/>
                              <label class="checkbox" for="69">Videography</label>
                           </div>
                           @endif
                           @if($data['item'] ==70)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="70"  name="70" value="70"/>
                              <label class="checkbox" for="70">Venue Management</label>
                           </div>
                           @endif
                           @if($data['item'] ==71)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="71"  name="71" value="71"/>
                              <label class="checkbox" for="71">Theme Cakes</label>
                           </div>
                           @endif
                           @if($data['item'] ==72)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="72"  name="72" value="72"/>
                              <label class="checkbox" for="72">Theme Decoration</label>
                           </div>
                           @endif
                           @if($data['item'] ==73)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="73"  name="73" value="73"/>
                              <label class="checkbox" for="73">Light system</label>
                           </div>
                           @endif
                           @if($data['item'] ==74)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="74"  name="74" value="74"/>
                              <label class="checkbox" for="74">Music and entertainments</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>

                  
               </div>


               <div class="row">
                  <div class="col-md-12">
                     <h2>Mehandi Checklist</h2>
                  </div>
               </div>
               <div class="row">
               
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>Our services include </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==75)
                        <div class="checkbox-container">
                              <input type="checkbox" checked id="75"  name="75" value="75"/>
                              <label class="checkbox" for="75">Candid Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==76)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="76"  name="76" value="76"/>
                              <label class="checkbox" for="76">Candid Videography</label>
                           </div>
                           @endif
                           @if($data['item'] ==77)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="77"  name="77" value="77"/>
                              <label class="checkbox" for="77">Traditional Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==78)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="78"  name="78" value="78"/>
                              <label class="checkbox" for="78">Traditional Videography</label>
                           </div>
                           @endif
                           @if($data['item'] ==79)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="79"  name="79" value="79"/>
                              <label class="checkbox" for="79">Venue management</label>
                           </div>
                           @endif
                           @if($data['item'] ==80)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="80"  name="80" value="80"/>
                              <label class="checkbox" for="80">Theme decoration</label>
                           </div>
                           @endif
                           @if($data['item'] ==81)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="81"  name="81" value="81"/>
                              <label class="checkbox" for="81">Light system</label>
                           </div>
                           @endif
                           @if($data['item'] ==82)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="82"  name="82" value="82"/>
                              <label class="checkbox" for="82">Music and entertinments</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>

               </div>

               <div class="row">
                  <div class="col-md-12">
                     <h2>Haldi Checklist</h2>
                  </div>
               </div>
               <div class="row">
               
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>Our services include </h4>
                        <div class="form-container">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==83)
                        <div class="checkbox-container">
                              <input type="checkbox" checked id="83"  name="83" value="83"/>
                              <label class="checkbox" for="83">Candid Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==84)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="84"  name="84" value="84"/>
                              <label class="checkbox" for="84">Candid Videography</label>
                           </div>
                           @endif
                           @if($data['item'] ==85)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="85"  name="85" value="85"/>
                              <label class="checkbox" for="85">Traditional Photography</label>
                           </div>
                           @endif
                           @if($data['item'] ==86)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="86"  name="86" value="86"/>
                              <label class="checkbox" for="86">Traditional Videography</label>
                           </div>
                           @endif
                           @if($data['item'] ==87)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="87"  name="87" value="87"/>
                              <label class="checkbox" for="87">Venue management</label>
                           </div>
                           @endif
                           @if($data['item'] ==88)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="88"  name="88" value="88"/>
                              <label class="checkbox" for="88">Theme decoration</label>
                           </div>
                           @endif
                           @if($data['item'] ==89)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="89"  name="89" value="89"/>
                              <label class="checkbox" for="89">Light system</label>
                           </div>
                           @endif
                           @if($data['item'] ==90)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="90"  name="90" value="90"/>
                              <label class="checkbox" for="90">Sound system</label>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>

                  
               </div>

               

               <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                     <a class="back" href="{{ route('admin.list.enquiry') }}">Back</a>
                        <a href="{{url('admin/get-personal/'.$result['id'])}}" class="front">Next</a>
                     </div>
                  </div>
               </div>
               </form>
            </div>
         </div>


         
      </section>
      <section class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2021 CatsEye All Rights Reserved</p>
               </div>
            </div>
         </div>
      </section>
       @endsection

@push('js')
<script src="{{url('admin/admin/enquiry.js')}}" type="text/javascript"></script>
@endpush