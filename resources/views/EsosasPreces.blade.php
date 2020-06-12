@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <img src="{{  url('public/alala.jpg') }}" width="300px" alt="foto" >
    </div>
        <div class="row">
                    <div class="col-sm">
                        <div class="card">
                              <h2 class="list-group-item list-group-item-primary">Filter box</h2>
                               <div class="card-body">
                                   
                                </div>
                        </div>
                        <div class="card-body">
                            aalalla
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                             <h2 class="list-group-item list-group-item-primary">Flowers</h2> 
                        </div>
                           <div class="card-body">
                                 
                         </div>
                    </div>
                </div>
</div>
@endsection



<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Puzzle Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="reset.css" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    </head>
    <script>
        var data = [{"name":"Rubik's cube 2x2","id":"1","type":"cubes","price":"5,00","level":"3", "material":"plastic", "age":"3+", "image":"./images/products/1.jpg"}
,{"name":"Rubik's mirror cube 3x3","id":"2","type":"cubes","price":"7,00","level":"4", "material":"plastic", "age":"3+", "image":"./images/products/2.jpg"}
,{"name":"Rubik's cube 3x3","id":"2","type":"cubes","price":"7,00","level":"4", "material":"plastic", "age":"3+", "image":"./images/products/3.jpg"}
,{"name":"Rubik's cube 4x4","id":"3","type":"cubes","price":"10,00","level":"5", "material":"plastic", "age":"7+","image":"./images/products/4.jpg"}
,{"name":"Rubik's cube 5x5","id":"4","type":"cubes","price":"15,00","level":"6", "material":"plastic", "age":"7+", "image":"./images/products/5.jpg"}
,{"name":"Rubik's cube 6x6","id":"5","type":"cubes","price":"20,00","level":"7", "material":"plastic", "age":"7+", "image":"./images/products/6.jpg"}
,{"name":"Rubik's cube 7x7","id":"6","type":"cubes","price":"30,00","level":"8", "material":"plastic", "age":"7+", "image":"./images/products/7.jpg"}
,{"name":"Rubik's cube 8x8","id":"7","type":"cubes","price":"35,00","level":"9", "material":"plastic", "age":"12+", "image":"./images/products/8.jpg"}
,{"name":"Rubik's cube 9x9","id":"8","type":"cubes","price":"45,00","level":"9", "material":"plastic", "age":"12+", "image":"./images/products/9.jpg"}
,{"name":"Rubik's cube 10x10","id":"9","type":"cubes","price":"60,00","level":"9", "material":"plastic", "age":"12+", "image":"./images/products/10.jpg"}
,{"name":"Rubik's cube 11x11","id":"10","type":"cubes","price":"70,00","level":"10", "material":"plastic", "age":"16+", "image":"./images/products/11.jpg"}
,{"name":"Gigamix cube","id":"11","type":"cubes","price":"20,00","level":"8", "material":"plastic", "age":"12+", "image":"./images/products/12.jpg"}
,{"name":"Rubik's pyramid 3x3","id":"12","type":"cubes","price":"20,00","level":"5", "material":"plastic", "age":"7+", "image":"./images/products/13.jpg"}
,{"name":"Rubik's pyramid 4x4","id":"13","type":"cubes","price":"20,00","level":"6", "material":"plastic", "age":"7+", "image":"./images/products/14.jpg"}
,{"name":"Rubik's cube-cylinder","id":"14","type":"cubes","price":"10,00","level":"4", "material":"plastic", "age":"7+", "image":"./images/products/15.jpg"}


,{"name":"Classic Burr Puzzle","id":"15","type":"wood puzzles","price":"1,00","level":"3", "material":"wood", "age":"3+", "image":"./images/products/16.jpg"}
,{"name":"Wooden star","id":"16","type":"wood puzzles","price":"2,00","level":"4", "material":"wood", "age":"3+", "image":"./images/products/17.jpg"}
,{"name":"3D Rubik puzzle","id":"17","type":"wood puzzles","price":"1,50","level":"4", "material":"wood", "age":"7+", "image":"./images/products/18.png"}
,{"name":"Wooden star","id":"17","type":"wood puzzles","price":"2,00","level":"4", "material":"wood", "age":"7+", "image":"./images/products/19.jpg"}
,{"name":"Ways puzzle","id":"18","type":"wood puzzles","price":"0,50","level":"2", "material":"wood", "age":"3+", "image":"./images/products/20.jpg"}
,{"name":"Lattice puzzle","id":"19","type":"wood puzzles","price":"5,00","level":"5", "material":"wood", "age":"7+", "image":"./images/products/21.jpg"}
,{"name":"Wild dog","id":"20","type":"wood puzzles","price":"3,40","level":"5", "material":"wood", "age":"12+", "image":"./images/products/22.png"}
,{"name":"Burr puzzle","id":"21","type":"wood puzzles","price":"2,00","level":"4", "material":"wood", "age":"7+", "image":"./images/products/23.jpg"}
,{"name":"Wooden cube","id":"22","type":"wood puzzles","price":"4,50","level":"4", "material":"wood", "age":"7+", "image":"./images/products/24.jpg"}
,{"name":"Wooden sphere","id":"23","type":"wood puzzles","price":"3,00","level":"5", "material":"wood", "age":"12+", "image":"./images/products/25.jpg"}
,{"name":"Ball pyramid","id":"24","type":"wood puzzles","price":"2,00","level":"3", "material":"wood", "age":"7+", "image":"./images/products/26.jpg"}
,{"name":"Wooden toy","id":"25","type":"wood puzzles","price":"1,00","level":"5", "material":"wood", "age":"7+", "image":"./images/products/27.jpg"}
,{"name":"Wooden maze","id":"26","type":"wood puzzles","price":"11,00","level":"4", "material":"wood", "age":"3+", "image":"./images/products/28.jpg"}
,{"name":"Wooden star","id":"27","type":"wood puzzles","price":"7,00","level":"6", "material":"wood", "age":"3+", "image":"./images/products/29.jpg"}
,{"name":"Puzzle ming","id":"28","type":"wood puzzles","price":"8,00","level":"4", "material":"wood", "age":"7+", "image":"./images/products/30.jpg"}


,{"name":"Wire metal puzzle","id":"29","type":"metal puzzles","price":"4,00","level":"4", "material":"metal", "age":"7+", "image":"./images/products/31.jpg"}
,{"name":"E=mc2 puzzle","id":"30","type":"metal puzzles","price":"8,50","level":"4", "material":"metal", "age":"7+", "image":"./images/products/32.jpg"}
,{"name":"Metal rings","id":"31","type":"metal puzzles","price":"4,70","level":"5", "material":"metal", "age":"7+", "image":"./images/products/33.jpg"}
,{"name":"Loop the loop","id":"32","type":"metal puzzles","price":"3,00","level":"4", "material":"metal", "age":"12+", "image":"./images/products/34.jpg"}
,{"name":"Puzzle Hanayama","id":"33","type":"metal puzzles","price":"10,00","level":"6", "material":"metal", "age":"12+", "image":"./images/products/35.png"}
,{"name":"Eureka puzzle","id":"34","type":"metal puzzles","price":"9,00","level":"5", "material":"metal", "age":"12+", "image":"./images/products/36.jpg"}
,{"name":"Metal puzzle","id":"35","type":"metal puzzles","price":"4,30","level":"6", "material":"metal", "age":"12+", "image":"./images/products/37.jpg"}
,{"name":"Metal double rings","id":"36","type":"metal puzzles","price":"12,00","level":"4", "material":"metal", "age":"16+", "image":"./images/products/38.jpg"}
,{"name":"Puzzle art","id":"37","type":"metal puzzles","price":"7,00","level":"6", "material":"metal", "age":"12+", "image":"./images/products/39.png"}
,{"name":"Metal heart","id":"38","type":"metal puzzles","price":"11,00","level":"6", "material":"metal", "age":"16+", "image":"./images/products/40.jpg"}
,{"name":"Metal loops","id":"39","type":"metal puzzles","price":"3,60","level":"7", "material":"metal", "age":"16+", "image":"./images/products/41.jpg"}
,{"name":"Rings","id":"40","type":"metal puzzles","price":"7,00","level":"5", "material":"metal", "age":"12+", "image":"./images/products/42.jpg"}
,{"name":"Two nails","id":"41","type":"metal puzzles","price":"12,00","level":"6", "material":"metal", "age":"12+", "image":"./images/products/43.jpg"}
,{"name":"Double snail","id":"42","type":"metal puzzles","price":"5,00","level":"5", "material":"metal", "age":"12+", "image":"./images/products/44.jpg"}


,{"name":"Puzzle 100","id":"43","type":"puzzles","price":"4,00","level":"2", "material":"puzzles", "age":"3+", "image":"./images/products/45.jpg"}
,{"name":"Puzzle 100","id":"44","type":"puzzles","price":"4,00","level":"2", "material":"puzzles", "age":"3+", "image":"./images/products/46.jpg"}
,{"name":"Puzzle 500","id":"45","type":"puzzles","price":"7,00","level":"4", "material":"puzzles", "age":"7+", "image":"./images/products/47.jpg"}
,{"name":"Puzzle 500","id":"46","type":"puzzles","price":"7,00","level":"4", "material":"puzzles", "age":"7+", "image":"./images/products/48.jpg"}
,{"name":"Puzzle 1000","id":"47","type":"puzzles","price":"12,00","level":"6", "material":"puzzles", "age":"7+", "image":"./images/products/49.jpg"}
,{"name":"Puzzle 1000","id":"48","type":"puzzles","price":"12,00","level":"6", "material":"puzzles", "age":"7+", "image":"./images/products/50.jpg"}
,{"name":"Puzzle 2000","id":"49","type":"puzzles","price":"20,00","level":"7", "material":"puzzles", "age":"12+", "image":"./images/products/51.jpg"}
,{"name":"Puzzle 2000","id":"50","type":"puzzles","price":"20,00","level":"7", "material":"puzzles", "age":"12+", "image":"./images/products/52.jpg"}
,{"name":"Puzzle 3000","id":"51","type":"puzzles","price":"30,00","level":"8", "material":"puzzles", "age":"12+", "image":"./images/products/53.jpg"}
,{"name":"Puzzle 3000","id":"52","type":"puzzles","price":"30,00","level":"8", "material":"puzzles", "age":"12+", "image":"./images/products/54.jpg"}
,{"name":"Puzzle 5000","id":"53","type":"puzzles","price":"40,00","level":"9", "material":"puzzles", "age":"16+", "image":"./images/products/55.jpg"}
,{"name":"Puzzle 5000","id":"54","type":"puzzles","price":"40,00","level":"9", "material":"puzzles", "age":"16+", "image":"./images/products/56.jpg"}
,{"name":"Puzzle 18000","id":"55","type":"puzzles","price":"60,00","level":"10", "material":"puzzles", "age":"16+", "image":"./images/products/57.jpg"}
,{"name":"Puzzle 42000","id":"56","type":"puzzles","price":"100,00","level":"10", "material":"puzzles", "age":"16+", "image":"./images/products/58.jpg"}

       </script>
       
       <script>
               i = -1;
mas_color = new Array("#f00000", "#1900ff", "#00ff4c", "#faa200");
function head_color() {
 i++;
 document.getElementById("title").style.color = mas_color[i];
 if (i>mas_color.length) i = -1;
 setTimeout("head_color()", 800);
}
head_color();



t=0;
function change_background(){
    t++;
    if(t==0 || t==4) {document.getElementById("1").style.backgroundImage = 'url(images/bg1.jpg)'; t=0;
              document.getElementById("headtext").innerHTML = "Explore the world of cubes"}
    if(t==1) {document.getElementById("1").style.backgroundImage = 'url(images/bg2.jpg)';
              document.getElementById("headtext").innerHTML = "Solve intriguing problems"}
    if(t==2) {document.getElementById("1").style.backgroundImage = 'url(images/bg3.jpg)';
                document.getElementById("headtext").innerHTML = "Find out more about puzzles"};
    if(t==3) {document.getElementById("1").style.backgroundImage = 'url(images/bg4.jpg)'; t=-1;
                document.getElementById("headtext").innerHTML = "Make-A-Wish Foundation!"};
}

function change_background_2(){
    t--;
    if(t==0) {document.getElementById("1").style.backgroundImage = 'url(images/bg1.jpg)' ;
    document.getElementById("headtext").innerHTML = "Explore the world of cubes"}
    if(t==1) {document.getElementById("1").style.backgroundImage = 'url(images/bg2.jpg)';
    document.getElementById("headtext").innerHTML = "Solve intriguing problems"}
    if(t==2 || t==-2) {document.getElementById("1").style.backgroundImage = 'url(images/bg3.jpg)'; t=2;
    document.getElementById("headtext").innerHTML = "Find out more about puzzles"};
    if(t==3 || t==-1) {document.getElementById("1").style.backgroundImage = 'url(images/bg4.jpg)'; t=3;
    document.getElementById("headtext").innerHTML = "Make-A-Wish Foundation!"};
}
    

var table=document.getElementById("product_table");
function Create_table(){
    var container = document.createElement("div");
    container.className = 'container2';
    container.style.display ='inline-block';
    container.style.width = '100%';
    container.style.textAlign = 'center';
    for(let i in data){
        var info_cell = document.createElement("div");
        var info = document.createElement("div");
        var puzzle_head = document.createElement("div");
        var puzzle_text = document.createElement("div");
        var p1 = document.createElement("p");
        var p2 = document.createElement("p");
        var p3 = document.createElement("div");
        var img = document.createElement("img");

        info.className = 'info';
        info_cell.className = 'info-cell';
        info_cell.setAttribute("id","block"+i);
        img.src = data[i].image;

        p1.innerHTML = data[i].name;
        p1.setAttribute("id","name"+i);
        p1.setAttribute("class","name");
        p2.innerHTML = data[i].price+"&#36";
        p2.setAttribute("id","price"+i);
        p2.setAttribute("class","price");
        p3.innerHTML = data[i].age;
        p3.setAttribute("id","age"+i);
        p3.setAttribute("class","age"); 
        puzzle_head.className = 'puzzle-head';
        puzzle_text.className = 'puzzle-text';
  
        puzzle_text.appendChild(p1);
        puzzle_text.appendChild(p2);
        puzzle_head.appendChild(img);
        puzzle_head.appendChild(p3);
        info.appendChild(puzzle_head);
        info.appendChild(puzzle_text);
        info_cell.appendChild(info);
        container.appendChild(info_cell);
        table.appendChild(container);
    }
}


function showproducts(){
  var cbox1 = document.getElementById("1cbox");
  var cbox2 = document.getElementById("2cbox");
  var cbox3 = document.getElementById("3cbox");
  var cbox4 = document.getElementById("4cbox");
  var cbox5 = document.getElementById("5cbox");
  var cbox6 = document.getElementById("6cbox");
  var cbox7 = document.getElementById("7cbox");
  var cbox8 = document.getElementById("8cbox");
  var cbox9 = document.getElementById("9cbox");
  var cbox10 = document.getElementById("10cbox");
  var cbox11 = document.getElementById("11cbox");
  for(var i in data){
    var s = document.getElementById("block"+i);
    var age = document.getElementById("age"+i).innerHTML;
    var level = data[i].level;
    var price = data[i].price;
    var name = document.getElementById("search").value;
    var name2 = data[i].name;

    var p1 = document.getElementById("1p").innerHTML;
    var p2 = document.getElementById("2p").innerHTML;
    var p3 = document.getElementById("3p").innerHTML;
    var p4 = document.getElementById("4p").innerHTML;
    var p5 = document.getElementById("5p").innerHTML;
    var p6 = document.getElementById("6p").innerHTML;
    var p7 = document.getElementById("7p").innerHTML;
    var p8 = document.getElementById("8p").innerHTML;
    var p9 = document.getElementById("9p").innerHTML;
    var p10 = document.getElementById("10p").innerHTML;
    var p11 = document.getElementById("11p").innerHTML;

    tmp1=parseInt(level)>=parseInt(p5.substring(0,1)) && parseInt(level)<=parseInt(p5.substring(2,3));
    tmp2=cbox1.checked && age==p1;
    tmp3=cbox2.checked && age==p2;
    tmp4=cbox3.checked && age==p3;
    tmp5=cbox4.checked && age==p4;
    tmp6=cbox5.checked && parseInt(level)>=parseInt(p5.substring(0,1)) && parseInt(level)<=parseInt(p5.substring(2,3));
    tmp7=cbox6.checked && parseInt(level)>=parseInt(p6.substring(0,1)) && parseInt(level)<=parseInt(p6.substring(2,3));
    tmp8=cbox7.checked && parseInt(level)>=parseInt(p7.substring(0,1)) && parseInt(level)<=parseInt(p7.substring(2,4));

    k1 = cbox1.checked || cbox2.checked || cbox3.checked || cbox4.checked;
    k2 = cbox5.checked || cbox6.checked || cbox7.checked;
    k3 = cbox8.checked || cbox9.checked || cbox10.checked || cbox11.checked;
    a = parseInt(price)>=parseInt(p8.substring(0,2));
    b = parseInt(price)<=parseInt(p8.substring(3,7));
    c = parseInt(price)>=parseInt(p9.substring(0,2));
    d = parseInt(price)<=parseInt(p9.substring(4,7));
    e = parseInt(price)>=parseInt(p10.substring(0,2));
    f = parseInt(price)<=parseInt(p10.substring(4,7));
    g = parseInt(price)>=parseInt(p11.substring(0,2));
    h = parseInt(price)<=parseInt(p11.substring(4,7));

    if(!k1 && !k2 && !k3) s.hidden = false;

    if(!k1 && !k2 && k3) {
      if(cbox8.checked && a && b || cbox9.checked && c && d || cbox10.checked && e && f || cbox11.checked && g && h) s.hidden=false;
      else s.hidden=true;
    }

    if(!k1 && k2 && !k3){
      if(cbox5.checked && tmp6 || cbox6.checked && tmp7 || cbox7.checked && tmp8) s.hidden=false;
      else s.hidden=true;
    }

    if(!k1 && k2 && k3){
      if((cbox8.checked && a && b || cbox9.checked && c && d || cbox10.checked && e && f || cbox11.checked && g && h) && (cbox5.checked && tmp6 || cbox6.checked && tmp7 || cbox7.checked && tmp8)){
        s.hidden=false;
      }
      else s.hidden = true;
    }

    if(k1 && !k2 && !k3){
      if(cbox1.checked && age==p1 || cbox2.checked && age==p2 || cbox3.checked && age==p3 || cbox4.checked && age==p4) s.hidden = false;
      else s.hidden = true;
    }

    if(k1 && !k2 && k3){
      if((cbox1.checked && age==p1 || cbox2.checked && age==p2 || cbox3.checked && age==p3 || cbox4.checked && age==p4) && (cbox8.checked && a && b || cbox9.checked && c && d || cbox10.checked && e && f || cbox11.checked && g && h)){
        s.hidden=false;
      }
      else s.hidden=true;
    }

    if(k1 && k2 && !k3){
      if((cbox1.checked && age==p1 || cbox2.checked && age==p2 || cbox3.checked && age==p3 || cbox4.checked && age==p4) && (cbox5.checked && tmp6 || cbox6.checked && tmp7 || cbox7.checked && tmp8)){
        s.hidden=false;
      }
      else s.hidden=true;
    }

    if(k1 && k2 && k3){
      if((cbox1.checked && age==p1 || cbox2.checked && age==p2 || cbox3.checked && age==p3 || cbox4.checked && age==p4) && (cbox5.checked && tmp6 || cbox6.checked && tmp7 || cbox7.checked && tmp8) && (cbox8.checked && a && b || cbox9.checked && c && d || cbox10.checked && e && f || cbox11.checked && g && h)){
        s.hidden=false;
      }
      else s.hidden=true;
    }

    if(s.hidden==false && name.length>=2){
      if(name2.indexOf(name)!=-1) s.hidden=false;
      else s.hidden=true;
    }
  }
}

Create_table();
       </script>
    <body>
      <header>
          <nav id="top-menu" class="menu">
              <ul class="parent-menu">
                  <li class="sub-menu-caption upper-menu active">Home
                      <ul class="sub-menu">
                          <li><a href="puzzles_main.html">Back home</a></li>
                          <li><a href="About_puzzles.html">About puzzles</a></li>
                      </ul>
                      <div class="expand"><div class="icon">&#8744;</div></div>
                  </li>
                  <li class="upper-menu"><a href="Solutions.html">Solutions</a></li>
                  <li class="upper-menu right"><a class="btn" href="SignIn.html">Sign in</a></li>
              </ul>
          </nav>
    
          <div class="head">
             <div class="head_images">
                <div class="top">
                    <div class="puzzle-cell"> <img src="images/cube.jpg" alt="Rubik's cube"> </div>
                    <div class="puzzle-cell"> <img src="images/pyramid.jpg" alt="Pyramid"> </div>
                    <div class="puzzle-cell"> <img src="images/cube2.jpg" alt="Cube"> </div>
                    <div class="puzzle-cell"> <img src="images/star.png" alt="Star"> </div>
                    <div class="puzzle-cell"> <img src="images/burr.jpg" alt="Burr"> </div>
                    <div class="puzzle-cell"> <img src="images/wood_puzzle.png" alt="Wood puzzle"> </div>
                    <div class="puzzle-cell"> <img src="images/metal_star.jpg" alt="Metal star"> </div>
                    <div class="puzzle-cell"> <img src="images/metal_brain.jpg" alt="Metal brain"> </div>
                    <div class="puzzle-cell"> <img src="images/metal_rings.jpg" alt="Metal rings"> </div>
                </div>
                <div class="head_title" id="title">
                    <h1>Puzzle planet</h1>
                </div>
              </div>
            
              <div class="bg-overlay" id="1">
                  <div class="title">
                      <h1 id="headtext">Explore the world of cubes </h1>    
                  </div>
              </div>
          </div>
      </header>



      <div class="button_1" onclick="change_background()">
          <p id="B1">&gt;</p>
      </div>
      <div class="button_2" onclick="change_background_2()">
          <p id="B2">&lt;</p>
      </div>


      <div class="container">
          <div class="row">
              <div class="col-3">
                  <h3>Filtres</h3>
                  <table class="table">
                    <thead>
                        <tr>
                            <th>criteria</th>
                            <th colspan="3">choice</th>
                        </tr>
                    </thead>
                    <tbody class="tb_body">
                        <tr class="firstrow">
                            <td rowspan="4" class="firstcol">Age</td>
                            <td ><input type="checkbox" id="1cbox" onclick="showproducts()"></td>
                            <td id="1p" colspan="2">3+</td>
                            
                        </tr>
                        <tr class="secondrow" >
                            <td><input type="checkbox" id="2cbox" onclick="showproducts()"></td>
                            <td id="2p" colspan="2">7+</td>
                        </tr>
                        <tr class="firstrow">
                            <td colspan="2"><input type="checkbox" id="3cbox" onclick="showproducts()"></td>
                            <td id="3p">12+</td>
                        </tr>
                        <tr class="secondrow">
                            <td colspan="2"><input type="checkbox" id="4cbox" onclick="showproducts()"></td>
                            <td id="4p">16+</td>
                        </tr>
                        <tr class="firstrow">
                            <td rowspan="3" class="firstcol">Difficulty level</td>
                            <td colspan="2"><input type="checkbox" id="5cbox" onclick="showproducts()"></td>
                            <td id="5p">1-3</td>
                        </tr>
                        <tr class="secondrow" >
                            <td colspan="2"><input type="checkbox" id="6cbox" onclick="showproducts()"></td>
                            <td id="6p">4-6</td>
                        </tr>
                        <tr class="firstrow">
                            <td colspan="2"><input type="checkbox" id="7cbox" onclick="showproducts()"></td>
                            <td id="7p">7-10</td>
                        </tr>
                        <tr class="secondrow">
                            <td rowspan="4" id="tb_price">Price</td>
                            <td colspan="2"><input type="checkbox" id="8cbox" onclick="showproducts()"></td>
                            <td id="8p">0$-10$</td>
                        </tr>
                        <tr class="firstrow" >
                            <td colspan="2"><input type="checkbox" id="9cbox" onclick="showproducts()"></td>
                            <td id="9p">10$-25$</td>
                        </tr>
                        <tr class="secondrow">
                            <td colspan="2"><input type="checkbox" id="10cbox" onclick="showproducts()"></td>
                            <td id="10p">25$-50$</td>
                        </tr>
                        <tr class="firstrow">
                            <td colspan="2"><input type="checkbox" id="11cbox" onclick="showproducts()"></td>
                            <td id="11p">50$-100$</td>
                        </tr>
                    </tbody>
                </table>

                  <div class="second" id="tmp">
                      <label for="search" id="label-for-search">Name:</label>      
                      <input type="search" id="search" placeholder="Search puzzle..." oninput="showproducts()">
                  </div>
              </div>
              <div class="col" id="product_table"></div>
          </div>
      </div>

      <footer>
          <ul>
            <li>Web site made by Iļja Repko</li>
            <li>19.01.2020</li>
          </ul>
      </footer>
    </body>
</html>-->