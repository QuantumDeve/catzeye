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
      <section class="terms">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Terms and Conditions</h2>
                  <ul>
                     <li>The booking will only be secured after confirmation with the firm a deposite payment of 10% of the total amount.the deposit is nonrefundable</li>
                     <li>The photographer retains the copyrights to all the images can use any of the images for promotinal purposes expect as agreed otherwise</li>
                     <li>Accommodation and travel for the crew is the client's responsibility. This is not included in the quotation</li>
                     <li>The firm or the photographers cannot be held responsible for any circumstance beyond their control</li>
                     <li>This quotation will be valid for only 15 Days from the date of issue.</li>
                     <li>where extra expenses or time are incurred by the photographer as aresult of alterations to the original brief by the client, or otherwise at their request, the client shall be liable to pay such extra expenses or fees at the photographer’s normal rate to the photographer inaddition to the expenses shown as having been agreed or estimated.</li>
                     <li>Pre and post-wedding shoot expenses will be included in the client’s responsibility</li>
                     <li>Videos and albums edited will only be considered for correction once, if necessary. an additional sum of charge will be applied.</li>
                     <li>In case of event cacellation/postpone, the booking fees will not be refunded.</li>
                     <li>Any additions to the above shall be charged extra based on the cost involved</li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <h2>Quotation Acceptance</h2>
                  <ul>
                     <li>Confirm that the crew is still available on your intended wedding day by calling him on 8281927627 and 8157049617</li>
                     <li>Once you have made your deposit payments, please send the proof of payments to the coordinator to secure your booking.</li>
                     <li>If any details (venue,date,etc.) regarding the wedding changes, please contact the Event Coordinator as soon as possible.</li>
                     <li>In the event that photographic materials are damaged in processing. lost through camera malfunction or otherwise lost or damaged without fault on the part of the photographer, in this events the photographer/cinematographer shall not be liable or any amount in excesss of the previously paid amount by the client</li>
                     <li>The due performance of this contract is subject to alteration or cancellation by either party owing to any cause beyond their control.</li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <div class="price-table">
                     <h2>Photographer Payment Terms</h2>
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <thead>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1st Pay</th>
                                 <td>10% of the total amount as deposit for booking the dates</td>
                              </tr>
                              <tr>
                                 <th scope="row">2nd Pay</th>
                                 <td>70% of the total amount on the function day</td>
                              </tr>
                              <tr>
                                 <th scope="row">3rd Pay</th>
                                 <td>20% of the total amount on time of delivery of album and video</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="price-table">
                     <h2>Event Payment Terms</h2>
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <thead>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1st Pay</th>
                                 <td>10% of the total amount as deposit for booking the dates</td>
                              </tr>
                              <tr>
                                 <th scope="row">2nd Pay</th>
                                 <td>90% of the total amount on the function day</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                     <label class="form-check-label" for="flexCheckDefault">
                     I've read and accept the Terms &Conditions
                     </label>
                  </div>
                  

                
               </div>

                
            </div>
             <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- <a class="back" href="{{route('personal')}}">Back</a> -->
                        <button type="submit" class="btn contact-submit " id="saveAll"  disabled>Submit</button>
                     </div>
                  </div>
               </div>
         </div>
      </section>
      <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <!-- <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div> -->
               <div class="modal-body sucess">
                  <img src="{{asset('/user/images/happy.png')}}">
                  <h4>Thank You!</h4>
                  <p>Your submission is received and we<br>will contact you soon</p>
               </div>
            </div>
         </div>
      </div>
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
      <script src="{{url('user/application/application.js')}}" type="text/javascript"></script>
      @endpush