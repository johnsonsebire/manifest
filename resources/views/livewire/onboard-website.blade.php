<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <section class="p-t-120 p-b-90">
        <div class="container">
            <div class="offset-lg-3 col-lg-6">
                <h2 class="text-center m-b-10"> Awesome! Start Building Your Highly Converting Website </h2>
                
                <div x-data={step:1}>
                    {{-- Step One --}}
                    <div x-show="step==1">
                        <h3> Let's get to know you first! </h3>
                        @csrf
                        <form action="" method="post">
                            <label for="nane">What is your name?</label>
                            <input type="text" name="name" class="form-control">
                            <label for="mobile"> What is your email address? </label>
                            <input type="email" name="email" class="form-control"> 
                            <label for="mobile"> What is your phone number? </label>
                            <input type="tel" name="mobile" class="form-control"> 
                            <button class="btn btn-primary" style="margin-top:10px" @click.prevent="step=2"> Next </button>
                        </form>
                    </div> 
                    {{-- Step Two --}}
                    <div x-show="step==2" x-transition>
                        <h3>Tell us About Your Project</h3>
                        <label>What Type of website are you building? </label>
                        <select name="Website" id="" class="form-control" wire:model="websitetype">
                            <option value=""> Choose Website Type</option>
                            <option value="personal">Personal</option>
                            <option value="business">Business</option>
                            <option value="charity">Charity</option>
                            <option value="church">Church</option>
                            <option value="government">Government</option>
                            <option value="other">Other</option>
                        </select>
                        @if($websitetype)
                        <div> 
                            <label> What is the preferred address for your {{$websitetype}} website? </label>
                            <input type="text" class="form-control" placeholder="e.g. my{{$websitetype}}website.com" wire:model="domain">
                        </div> 
                        <div>{{$availability}}</div>
                        @endif 
                        <button class="btn btn-primary" style="margin-top:10px" @click.prevent="step=1"> Previous </button>
                        <button class="btn btn-primary" style="margin-top:10px" @click.prevent="step=3"> Next </button>
                        
                    </div>
                    
                    <div class="step-3" x-show="step==3">
                        
                        <h3> Last Step </h3> 

                        <button class="btn btn-primary" style="margin-top:10px" @click.prevent="step=2"> Previous </button>
                        <button class="btn btn-primary" style="margin-top:10px" @click.prevent="step=3"> Complete </button>
                    </div>
                </div>
                
                

            </div>
        </div>
    </section>
</div>
