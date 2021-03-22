<div class="card mb-4 shadow-lg hover-shadow" id="card-component" style="margin-top:6rem;width:70%;">
        
          <div class="card-body">
            <div class="row">
              <h1 class="text-dark text-center mb-2" style="font-family:'Eina Bold',sans-serif;margin-top:1rem;font-size:2rem;">
              
                <span>
                  <?xml version="1.1" encoding="UTF-8" ?>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 750 749.999995" version="1.2" style="margin-bottom:.5rem;">
                  <defs>
                    <clipPath id="clip1">
                      <path d="M 27.929688 27.929688 L 722.429688 27.929688 L 722.429688 722.429688 L 27.929688 722.429688 Z M 27.929688 27.929688 "/>
                    </clipPath>
                  </defs>
                  <g id="surface1">
                  <g clip-path="url(#clip1)" clip-rule="nonzero">
                  <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 375.359375 27.929688 C 184.273438 27.929688 27.929688 184.273438 27.929688 375.359375 C 27.929688 566.449219 184.273438 722.792969 375.359375 722.792969 C 566.449219 722.792969 722.792969 566.449219 722.792969 375.359375 C 722.792969 184.273438 566.449219 27.929688 375.359375 27.929688 Z M 420.527344 535.179688 L 357.988281 535.179688 L 357.988281 288.503906 L 281.554688 312.824219 L 281.554688 260.707031 L 413.578125 212.066406 L 420.527344 212.066406 Z M 653.304688 375.359375 C 653.304688 528.855469 528.855469 653.304688 375.359375 653.304688 C 221.863281 653.304688 97.414062 528.855469 97.414062 375.359375 C 97.414062 221.863281 221.863281 97.414062 375.359375 97.414062 C 528.855469 97.414062 653.304688 221.863281 653.304688 375.359375 Z M 653.304688 375.359375 "/>
                  </g>
                  </g>
                  </svg>
                </span>
                Choose your meal plan
              </h1>
              <hr class="w-75" style="margin: 0 auto; margin-top:-.5rem;"></hr>
              <div class="card-body">
                <div class="row">
                  <form method="post" action="./checkout.php" class="row text-dark text-center justify-content-center" style="font-family:'Eina Regular';font-size:1.75rem;margin-top:0rem;margin:0 auto;">
                    I want
                    <select 
                            name="numOfMeals" 
                            class="form-select text-center w-auto form-select-lg mb-2 border-0" 
                            id="num-meals" 
                            style="font-size:1.75rem;margin-top:-.5rem;color:#ffb22f;font-weight:bold;" 
                            aria-label=".form-select-lg example"
                            onchange="selected()"
                      >
                        <option class="text-center" value="5">5 meals</option>
                        <option value="7">7 meals</option>
                        <option value="10" selected>10 meals</option>
                        <option value="14">14 meals</option>
                    </select> per week for

                    <select 
                            name="numOfWeeks"
                            id="num-weeks"
                            class="form-select text-center w-auto form-select-lg mb-1 border-0" 
                            style="font-size:1.75rem;margin-top:-.75rem;color:#ffb22f;font-weight:bold;" 
                            aria-label=".form-select-lg example"
                            onchange="selected()"
                      >
                        <option class="text-center" value="1">1 week</option>
                        <option value="2" selected>2 weeks</option>
                        <option value="4">4 weeks</option>
                    </select>
                    
                  
                    <!-- Price Display section -->
                    <section class="py-1" style="margin-top:0rem;">
                      <div class="d-flex justify-content-center" style="margin-top:-1rem;">
                        <div class="p-2 border-line mb-2">

                          <p class="text-dark me-2" style="
                            font-family:'Eina Bold',sans-serif;
                            font-size:1.5rem;
                            font-weight:bolder;
                            margin-bottom:-.5rem;">
                            <del>$8.49</del>
                          </p>

                          <p 
                            class="mb-1" 
                            style="font-family:'DM Sans',sans-serif;
                                   color:#ffb22f;
                                   font-size:2rem;
                                   font-weight:bold;"
                            id="price-para"
                            >
                            $7.80
                          </p>

                          <p style="
                          font-family:'Eina Regular',sans-serif;
                          font-size:1rem;
                          margin-top:-1rem">
                          per meal
                          </p>
                          
                        </div>

                        <div class="p-2">

                          <p class="text-dark" style="font-family:'Eina Bold',sans-serif;font-size:1.5rem;font-weight:bold;margin-bottom:-.5rem;">You save</p>
                          <p id="total-save" class="mb-1" style="font-family:'DM Sans',sans-serif;color:#ffb22f;font-size:2rem;font-weight:bold;">$71.55</p>
                          <p id="percent-discount-para" style="font-family:'Eina Regular',sans-serif;font-size:1rem;margin-top:-1rem">(20% discount)</p>
                        </div>
                      </div>
                    </section>

                    <button 
                      type="submit"
                      class="btn btn-lg btn-black btn-rounded w-50 mb-1 mx-1 text-white waves-effect"  
                      id="meal-plan-button" 
                      style="font-weight:'Eina Bold';margin-left: 3rem;text-transform: initial;font-size:1.5rem;border-radius:.5rem;">
                        Select this meal plan
                    </button>
                  </form>
                </div>
              </div>

          
            </div>

          </div>
   
</div>