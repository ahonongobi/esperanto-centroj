@extends('layouts/_indexRespondec')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

@section('content')
<section class="no-padding-top">
  <div class="container-fluid">
    <div class="row">
      <!-- Basic Form-->
      <div class="col-lg-10">
        <div class="block">
          <div class="title"><strong class="d-block">Bonvolu</strong><span class="d-block">Plenigi tiun formularon por doni al ni informoj pri via help kaj ni vidos kiel helpi ktp...</span></div>
          <div class="block-body">
          <form method="POST" action="{{route('informoj')}}">
            @csrf
              <div class="form-group col-sm-9">
                <label class="form-control-label">Preciza Nomo</label>
              <input type="text" name="name" placeholder="Nomo " value="{{old('name')}}" class="form-control">
                @if($errors->has('name'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('name') }}</p>
			         @endif
              </div>
              <div class="form-group col-sm-9">       
                <label class="form-control-label">Situo, kiel atingi la centro ?</label>
                <input type="text" name="lieu" value="{{old('lieu')}}" placeholder="Situo, kiel atingi la centro ?" class="form-control">
                @if($errors->has('lieu'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('lieu') }}</p>
			         @endif
              </div>
              <div class="col-sm-9">       
                <label class="form-control-label">Ĉu estas biblioteko ?</label>
                <select class="form-control mb-3 mb-3" name="bibliothque" id="">
                    <option value="Jes">Jes</option>
                    <option value="Ne">Ne</option>
                </select>
                @if($errors->has('bibliothque'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('bibliothque') }}</p>
			         @endif
              </div>
              <div class="col-sm-9">       
                <label class="form-control-label">Ĉu estas manĝeblo ?</label>
                <select class="form-control mb-3 mb-3" name="mangheblo" id="">
                    <option value="Jes">Jes</option>
                    <option value="Ne">Ne</option>
                </select>
                @if($errors->has('mangheblo'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('mangheblo') }}</p>
			         @endif
              </div>
              <div class="col-sm-9">       
                <label class="form-control-label">Ĉu estas libroservo ?</label>
                <select class="form-control mb-3 mb-3" name="libroservo" id="">
                    <option value="Jes">Jes</option>
                    <option value="Ne">Ne</option>
                </select>
                @if($errors->has('libroservo'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('libroservo') }}</p>
			         @endif
              </div>
              <div class="col-sm-9">       
                <label class="form-control-label">Ĉu estas dormeblo ?</label>
                <select class="form-control mb-3 mb-3" name="domo">
                    <option value="Jes">Jes</option>
                    <option value="Ne">Ne</option>
                </select>
                @if($errors->has('dormeblo'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('dormeblo') }}</p>
			         @endif
              </div>
              <div class="col-sm-9">       
                <label class="form-control-label">Ĉu estas kursejo, klasoĉambro ?</label>
                <select class="form-control mb-3 mb-3" name="kursejoklasochambro" id="">
                    <option value="Jes">Jes</option>
                    <option value="Ne">Ne</option>
                </select>
                
                @if($errors->has('kursejoklasochambro'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('kursejoklasochambro') }}</p>
			         @endif
              </div>
              <div class="col-sm-9">       
                <label class="form-control-label">Jaro de fondo</label>
                <select class="form-control mb-3 mb-3" name="jaro" id="">
                                <option value="">Jaro</option>
                                <option value="2012yuyu">2020</option>
                                <option value="2012">2019</option>
                                <option value="2012">2018</option>
                                <option value="2012">2017</option>
                                <option value="2012">2016</option>
                                <option value="2011">2015</option>
                                <option value="2010">2014</option>
                                <option value="2009">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                                <option value="1904">1904</option>
                                <option value="1903">1903</option>
                                <option value="1902">1902</option>
                                <option value="1901">1901</option>
                                <option value="1900">1900</option>
                </select>
               
                @if($errors->has('jaro'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('jaro') }}</p>
			         @endif
              </div>
              
              <div class="form-group col-sm-9">       
                  <label class="form-control-label">Telefono </label>
                  <input type="text" name="Telefono" value="{{old('numero')}}" placeholder="Telefono" class="form-control">
                  @if($errors->has('numero'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('numero') }}</p>
			         @endif
              </div>
              <div class="form-group col-sm-9">       
                <label class="form-control-label">Specifaj trajtoj:</label>
                <input type="text" name="trajto" value="{{old('trajto')}}" placeholder="Specifaj trajtoj" class="form-control">
                @if($errors->has('trajto'))
                        <p style="color: green;" class="text-red">{{ $errors->first('trajto') }}</p>
                @endif
            </div>
            <div class="form-group col-sm-9">       
                <label class="form-control-label">Agadplano:</label>
                <input type="text" name="agado" value="{{old('agado')}}" placeholder="Agadplano(j)" class="form-control">
                @if($errors->has('agado'))
                        <p style="color: green;" class="text-red">{{ $errors->first('agado') }}</p>
                @endif
            </div>
            <div class="form-group col-sm-9">       
                <label class="form-control-label">Kontaktadreso:</label>
                <input type="text" name="Kontaktadreso" value="{{old('Kontaktadreso')}}" placeholder="Kontaktadreso" class="form-control">
                @if($errors->has('Kontaktadreso'))
                        <p style="color: green;" class="text-red">{{ $errors->first('Kontaktadreso') }}</p>
                @endif
            </div>
              <div class="form-group col-sm-9">       
                <label class="form-control-label">Propa retejo </label>
                <input type="text" name="retejo" value="{{old('retejo')}}" placeholder="Propa retejo " class="form-control">
                @if($errors->has('retejo'))
	          			<p style="color: green;" class="text-red">{{ $errors->first('retejo') }}</p>
			         @endif
              </div>
            
              

              <div>       
                <input type="submit" value="Sendi" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
      
     </div>
  </div>
      
</section>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message')){
            var type= "{{Session::get('alert-type','info')}}";
            switch(type){
              case'info':
              toastr.info("{{Session::get('message')}}");
              break;
              case'warning':
              toastr.warning("{{Session::get('message')}}");
              break;
              case'success':
              toastr.success("{{Session::get('message')}}");
              break;
            } 
          } 
          
           
  
        @endif
        
	  </script>
@endsection





    


