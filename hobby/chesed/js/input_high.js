var mon_Value = document.getElementById("mon_Value");

var str_Mon = "";

function push_9(){
  console.log('PUSH: 9');
  func_Mon("9");
}

function push_8(){
  console.log('PUSH: 8');
  func_Mon("8");
}

function push_7(){
  console.log('PUSH: 7');
  func_Mon("7");
}

function push_6(){
  console.log('PUSH: 6');
  func_Mon("6");
}

function push_5(){
  console.log('PUSH: 5');
  func_Mon("5");
}

function push_4(){
  console.log('PUSH: 4');
  func_Mon("4");
}

function push_3(){
  console.log('PUSH: 3');
  func_Mon("3");
}

function push_2(){
  console.log('PUSH: 2');
  func_Mon("2");
}

function push_1(){
  console.log('PUSH: 1');
  func_Mon("1");
}

function push_0(){
  console.log('PUSH: 0');
  func_Mon("0");
}

function push_BS(){
  console.log('PUSH: BS');
  func_Mon("BS");
}

function push_NavRw(){
  console.log('PUSH: NavRw');
  window.location.href='index.php';
}

function push_NavNext(){
  console.log('PUSH: NavNext');
  func_Send();
}


function func_Mon(str_Pushed){

  if(str_Pushed != "BS"){
    
    if(str_Mon == ""||str_Mon=="　"){
      str_Mon = str_Pushed;
    } else {
      if(parseInt(str_Mon) < 100){
        str_Mon = str_Mon + str_Pushed;
      }
    }

  } else {
    if(str_Mon != ""){
      str_Mon = str_Mon.slice(0,-1);
    }
    
    if(str_Mon == ""){
      str_Mon = "　";
    }
  }

  mon_Value.innerHTML = str_Mon;

}

function func_Send(){

  if(str_Mon == "　"||str_Mon == ""){
    alert("値を入力して下さい。")
    stop();
  } else {
    window.location.href='input_low.html?high=' + str_Mon;
  }
}