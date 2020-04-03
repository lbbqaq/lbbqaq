<?php
    echo gettype((bool) "");
    echo gettype((bool) 1);
    echo gettype((bool) -2);
    echo gettype((bool) "foo");
    echo gettype((bool) 2.3e5);
    echo gettype((bool) array(12));
    echo gettype((bool) array())."<br>";
    
    echo $a=1.234."<br>";
    echo $a=1.2e3."<br>";
    echo $a=7E-10."<br>";
    var_dump($a);

    echo('生日快乐！')."<br>";
    echo('c:\\win')."<br>";
    echo("I am \"Jaen\".")."<br>";
    $str="mary";
    echo("Hi,$str")."<br>";
    echo('Hi,$str')."<br>";

    $name="Jean";
    echo<<<STR1
        My name is $name.<br>
        Happy Birthday to you!
    STR1;
    $name="Jean";
    echo<<<'STR1'
        My name is $name.<br>
        Happy Birthday to you!.<br>
    STR1;

    $str =<<<EOD
    Example of strin!
    spanning multiple lines
    using heredoc synatax
    EOD;
    echo<<<EOT
    My name is abc I am printing some $str.
    Now,I am printing some .
    This should print a capital 'A';\x41.<br>
    EOT;

    $name ="cheng";
    print<<<EOF
    hello $name
    EOF;

    $name ="chengcheng";
    echo<<<EOF
    <table height="20">
    <tr><td>
    {$name}<br/>
    </td></tr>
    </table>
    EOF;

    $n=5 ."cats";
    echo $n;
    echo "abcd$n.<br>";
    echo 'abcd$n.<br>';

    $number =9;
    $str ="北京";
    printf("在%s有%u百万辆自行车。<br>",$str,$number);

    //format 可能的值
    /*%% 一个百分号
      %b 二进制数
      %c ACSCII值的字符
      %d 包含正负数的十进制数
      %e %E 小写/大写科学计数法（1.2e/E+2）
      %u 不包含正负号的十进制数 
      %f %F 浮点数（本地设置/非本地设置）
      %g %G 较短的%e和%f/较短的%E和%f
      %o 八进制
      %s 字符串
      %x %X 十六进制
      */
      //例子：
      $number =123;
      printf("有两位小数：%1\$.2f<br>
      没有小数：%1\$u<br>",$number);


      Class foo
      {
               function do_foo()
               {
                       echo "Doing foo.";

               }
      }
      $bar =new foo;
      $bar->do_foo();

      $obj =(object)'ciao';
      echo $obj->scalar."<br>";

      $num=12;
      $float =(float)$num;
      echo gettype($num)."<br/>";
      echo gettype($float)."<br/>";
      //转换类型：settype（var,type）函数


      $str="123.9abc";
      $int=intval($str);//123
      echo $int."<br>";
      $float=floatval($str);//123.9
      echo $float."<br>";
      $str=strval($float);//123.9
      echo $str."<br/>";

      $var="Bob";
      $Var="Joe";
      echo "$var,$Var<br>";
      $_4site='not yet';

      $wo='baidu';
      $ba=&$wo;
      $ba="web site is $ba";
      echo $wo."<br>";
      echo $ba."<br>";

      echo PHP_VERSION."<br>";
      echo $_SERVER['REQUEST_METHOD']."<br>";
      echo $_SERVER['QUERY_STRING']."<br>";
      echo $_SERVER['DOCUMENT_ROOT']."<br>";
      echo $_SERVER['REMOTE_ADDR']."<br>";

      $pet="abc";
      $clown="pet";
      echo $clown."<br>";
      echo ${$clown}."<br>";

      $a=16;
      echo empty($a)."<br>";
      echo empty(0)."<br>";
      echo intval(4.6)."<br>";
      echo floatval('123.4ab')."<br>";

      define ("CONSTANT","Hello world.");
        echo CONSTANT."<br>";
        echo constant."<br>";
     define ("CONSTANT","Hello world.",true);
        echo CONSTANT."<br>";
        echo constant."<br>";


?>