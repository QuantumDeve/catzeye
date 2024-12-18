@extends('application.layouts.applicationlayout')
@section('pageTitle','Dashboard')

@section('content')
      <section class="header">
         <div class="container">
            <div class="content">
               <div class="row">
                  <div class="col-md-12">
                     <a href="index.html"><img src="{{ asset('/user/images/logo.png')}}"></a>
                     <h2>We focus on Your Story!</h2>
                     <p>Choose Your Event Now</p>
                     
                     <div class="dropdown-button">
                        
                        <div class="formselectwrap">
                           <select name="select_event" id="select_event">
                              <option value="0">Choose...</option>
                              <option value="1">Wedding ceremony</option>
                              <!-- <option value="2">North Indian Wedding</option> -->
                              <option value="3">MATERNITY PARTY</option>
                              <option value="4">NEWBORN PHOTOGRAPHY</option>
                              <option value="5">BIRTHDAY PARTY</option>
                           </select>
                        </div>
                        <button class="submit go">Go</button>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="popular-events">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Popular Events</h2>
               </div>
            </div>
            <div class="row">
               <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="{{route('wedding')}}">
                     <div class="item">
                        <img src="{{ asset('/user/images/wedding.png')}}">
                        <p>wedding ceremony</p>
                     </div>
                  </a>
               </div>
               <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="{{route('maternity')}}">
                     <div class="item">
                        <img src="{{ asset('/user/images/MATERNITY.png')}}">
                        <p>MATERNITY Party</p>
                     </div>
                  </a>
               </div>
               <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="{{route('new-born')}}">
                     <div class="item">
                        <img src="{{ asset('/user/images/newborn.png')}}">
                        <p>NEWBORN PHOTOGRAPHY</p>
                     </div>
                  </a>
               </div>
               <div class=" col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="{{route('birthday')}}">
                     <div class="item">
                        <img src="{{ asset('/user/images/birthday.png')}}">
                        <p>birthday Party</p>
                     </div>
                  </a>
               </div>
            </div>
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
   <script src="{{url('user/application/application.js')}}" type="text/javascript"></script>
   <script type="text/javascript">
         var x, i, j, l, ll, selElmnt, a, b, c;
         /*look for any elements with the class "formselectwrap":*/
         x = document.getElementsByClassName("formselectwrap");
         l = x.length;
         for (i = 0; i < l; i++) {
           selElmnt = x[i].getElementsByTagName("select")[0];
           ll = selElmnt.length;
           /*for each element, create a new DIV that will act as the selected item:*/
           a = document.createElement("DIV");
           a.setAttribute("class", "select-selected");
           a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
           x[i].appendChild(a);
           /*for each element, create a new DIV that will contain the option list:*/
           b = document.createElement("DIV");
           b.setAttribute("class", "select-items select-hide");
           for (j = 1; j < ll; j++) {
             /*for each option in the original select element,
             create a new DIV that will act as an option item:*/
             c = document.createElement("DIV");
             c.innerHTML = selElmnt.options[j].innerHTML;
             c.addEventListener("click", function(e) {
                 /*when an item is clicked, update the original select box,
                 and the selected item:*/
                 var y, i, k, s, h, sl, yl;
                 s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                 sl = s.length;
                 h = this.parentNode.previousSibling;
                 for (i = 0; i < sl; i++) {
                   if (s.options[i].innerHTML == this.innerHTML) {
                     s.selectedIndex = i;
                     h.innerHTML = this.innerHTML;
                     y = this.parentNode.getElementsByClassName("same-as-selected");
                     yl = y.length;
                     for (k = 0; k < yl; k++) {
                       y[k].removeAttribute("class");
                     }
                     this.setAttribute("class", "same-as-selected");
                     break;
                   }
                 }
                 h.click();
             });
             b.appendChild(c);
           }
           x[i].appendChild(b);
           a.addEventListener("click", function(e) {
               /*when the select box is clicked, close any other select boxes,
               and open/close the current select box:*/
               e.stopPropagation();
               closeAllSelect(this);
               this.nextSibling.classList.toggle("select-hide");
               this.classList.toggle("select-arrow-active");
             });
         }
         function closeAllSelect(elmnt) {
           /*a function that will close all select boxes in the document,
           except the current select box:*/
           var x, y, i, xl, yl, arrNo = [];
           x = document.getElementsByClassName("select-items");
           y = document.getElementsByClassName("select-selected");
           xl = x.length;
           yl = y.length;
           for (i = 0; i < yl; i++) {
             if (elmnt == y[i]) {
               arrNo.push(i)
             } else {
               y[i].classList.remove("select-arrow-active");
             }
           }
           for (i = 0; i < xl; i++) {
             if (arrNo.indexOf(i)) {
               x[i].classList.add("select-hide");
             }
           }
         }
         /*if the user clicks anywhere outside the select box,
         then close all select boxes:*/
         document.addEventListener("click", closeAllSelect);
         
         
                 
      </script>
   @endpush