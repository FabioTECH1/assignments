<form action="/edit/{{$test->id}}/submit" class="form" method="post">
                        @csrf
                     
                            <div class="col-lg-12">
                                <div class="form-group mb-20">
                                    <input type="text" class="form-control" placeholder="Enter Test Title" name="title"  value="{{$test->title}}">
                                    
                                </div>
                              
                                <div class="form-group mb-20" >
                                    <input type="number" class="form-control" placeholder="Enter Total Question" name="total_question" value="{{$test->total_question}}">
                                    
                                </div>
                            <div class="form-group mb-20">
                            <select name="test_duration"  class="form-control">
                            <option value="">{{$test->test_duration}}</option>
                            <option value="00:15" >15 Minutes</option>
                            <option value="00:30">30 Minutes</option>
                            <option value="00:45">45 Minutes</option>
                            <option value="00:60">1hr</option>
                            <option value="00:75">1hr 15Minutes</option>
                            <option value="00:90">1hr 30Minutes</option>
                            <option value="00:105">1hr 45Minutes</option>
                            <option value="00:120">2hrs </option>
                            <option value="00:135">2hrs 15Minutes</option>
                            <option value="00:150">2hrs 30 Minutes</option>
                            <option value="00:165">2hrs 45Minutes</option>
                            <option value="00:180">3hrs </option>
                            <option value="00:195">3hrs 15Minutes</option>
                            <option value="00:210">3hrs 30Minutes</option>
                            <option value="00:225">3hrs 45Minutes</option>
                            <option value="00:240">4hrs </option>
                            <option value="00:255">4hrs 15Minutes</option>
                            <option value="00:270">4hrs 30Minutes</option>
                            <option value="00:285">4hrs 45Minutes</option>
                            <option value="00:300">5hrs</option>
                            </select>
                            </div>

                         
                                <div class="form-group mb-20">
                                    {{-- <textarea name="instruction" id="" cols="20" rows="5" class="form-control">Enter Test Instructions</textarea> --}}
                                    <input type="number" max="100" class="form-control" placeholder="Enter Pass Mark (max:100)" name="passmark" value="{{$test->passmark}}">
                                    
                                </div>
                               
                                <div class="form-group mb-20">
                                    <textarea name="instruction" id="" cols="20" rows="5" class="form-control" placeholder="Enter Test Instruction" >{{$test->instruction}}</textarea>
                                    {{-- <input type="text" class="form-control" placeholder="Enter Test Title" name="title"> --}}
                                    
                                </div>
                         
                            <div class="col-lg-12 left">
                                <div class="form-check d-inline-flex mt-30 mb-30">
                                    {{-- @if($test->auth_result == 1) --}}
                                    <input class="form-check-input me-2 mt-0" type="radio" value="1" id="flexCheckDefault" name="auto_result"  >
                                        {{-- @endif --}}
                                    
                                    <label class="form-check-label small" for="flexCheckDefault" >
                                        Send Result Automatically<a href="#" class="text-decoration-underline"></a>
                                    </label>
                                   
                                </div>
                                <div class="form-check d-inline-flex mt-30 mb-30">
                                    {{-- @if($test->auth_result == 0) --}}
                                    <input class="form-check-input me-2 mt-0" type="radio" value="0" id="flexCheckDefault" name="auto_result">
                                    {{-- @endif --}}
                                    <label class="form-check-label small" for="flexCheckDefault">
                                        Do Not Send Result Automatically <a href="#" class="text-decoration-underline"></a>
                                    </label>
                                  
                                </div>
                            </div>
            
                            <div class="col-lg-12 left">
                                <div class="form-check d-inline-flex mt-30 mb-30">
                                    <input class="form-check-input me-2 mt-0"  type="radio" value="1" id="flexCheckDefault" name="test_mode">
                                    <label class="form-check-label small"  for="flexCheckDefault">
                                     Public <i class="fa fa-question-circle" aria-hidden="true"  data-toggle="tooltip" title="Making your Test public means anyone can access and take it."></i>
                                    
                                    </label>
                                  
                                </div>
                
                                <div class="form-check d-inline-flex mt-30 mb-30">
                                    <input class="form-check-input me-2 mt-0" type="radio" value="0" id="flexCheckDefault" name="test_mode">
                                    <label class="form-check-label small" for="flexCheckDefault">
                                        Private  <i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" title="Making your Test private means no one can access and take it."></i>
                                    </label>
                                  
                                </div>
                            </div>
                           
                           <div class="col-lg-12 text-center">
                               
                            <button class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold" type="submit" style="color: white">Edit Test</button>
                        </div>
                        </div>
                        </div>
                    </form>