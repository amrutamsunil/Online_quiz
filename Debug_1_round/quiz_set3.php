<?php
include ('dbconfig.php');
?>

<html>
<head>
    <link rel="stylesheet" href="lib/REPORTcss.css" type="text/css"/>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script src="lib/jquery.min.js"></script>

    <style>

        .div1 {
            width: 50%;
            height: 100px;
            border: 1px solid black;
        }
        .algn_miet{
            margin-left: 20%;
        }
    </style>


</head>

<body><br/>
<table>
    <tr>
        <td> <img src="lib/Fotoram.io12%20(1).png" height="80px" width="150px" style="margin-left: 20%"/> </td>
        <th height="87" width=100%><img src="lib/tisca.png" height="120px" width="450px" style="margin-left: 30%"></th>
    </tr>
</table>
<b><div id="quiz_" style="border: black; margin-left: 75%; color: red; height: 50px; width: 300px;text-align: center;font-size: 25px;"></div></b>

<div class="jumbotron" style="margin-left: 30%">
    <h6>INSTRUCTIONS : </h6>
    <ol type="i">
        <li><b>Don't exit full screen mode, else your mark will be submitted as <span style="color: red">zero</span>. </b></li>
        <li><b> Don't Refresh the page , else your mark will be submitted as <span style="color: red">zero</span>. </b></li>
        <li><b>Dont Go Back , else your mark will be submitted as <span style="color: red">zero</span>.</b></li>
        <li><b>You can submit only after answering all the questions.</b></li>
        <li><b>It will automatically submitted, when time ends </b></li>
        <li><b>There will be no error with the header files</b></li>
    </ol>

</div>
<div class="algn_miet">
    <form method="post" id="quizs" action="result.php">
  <pre><p>
<span><b>1)</b></span>
#include &lt stdio.h &gt
int main()
{
int a = 10, b;
    a >=5 ? b=100: b=200;
    printf("%d\n", b);
return0;
}
    </p></pre>
        <input class="radio control-label" type="radio" id="a" name="0" value="1" required><label for="a">100</label><br/>
        <input class="radio control-label" type="radio" id="b" name="0" value="2" required><label for="b">200</label><br/>
        <input class="radio control-label" type="radio" id="c" name="0" value="3" required><label for="c">Error: L value required for b</label><br/>
        <input class="radio control-label" type="radio" id="d" name="0" value="4" required><label for="d">Garbage value</label><br/>
        <br/>
        <pre>
    <p>
<span><b>2)</b></span>
#include &lt stdio.h &gt
int main()
{
    int i = 10, j = 20;
    if(i = 5) && if(j = 10)
        printf("Have a nice day");
    return 0;
}
    </p>
</pre>
        <input class="radio control-label" type="radio" id="a_" name="1" value="1" required><label for="a_">Output: Have a nice day</label><br/>
        <input class="radio control-label" type="radio" id="b_" name="1" value="2" required><label for="b_">No output</label><br/>
        <input class="radio control-label" type="radio" id="c_" name="1" value="3" required><label for="c_">Error: Expression syntax</label><br/>
        <input class="radio control-label" type="radio" id="d_" name="1" value="4" required><label for="d_">Error: Undeclared identifier if</label><br/>
        <br/>
        <pre>
    <p>
<span><b>3)</b></span>
#include &lt stdio.h &gt
int main()
{
    int x = 10, y = 100%90, i;
    for(i=1; i<10; i++)
    if(x != y);
        printf("x = %d y = %d\n", x, y);
    return 0;
}
1 :	The printf() function is called 10 times.
2 :	The program will produce the output x = 10 y = 10
3 :	The ; after the if(x!=y) will NOT produce an error.
4 :	The program will not produce output.

    </p>
</pre>
        <input class="radio control-label" type="radio" id="e" name="2" value="1" required><label for="e">1</label><br/>
        <input class="radio control-label" type="radio" id="f" name="2" value="2" required><label for="f">2,3</label><br/>
        <input class="radio control-label" type="radio" id="g" name="2" value="3" required><label for="g">3,4</label><br/>
        <input class="radio control-label" type="radio" id="h" name="2" value="4" required><label for="h">4</label><br/>
        <br/>
        <pre>
    <p>
<span><b>4)</b></span>
#include &lt stdio.h &gt

int main()
{
int i;
#if A
        printf("Enter any number:");
        scanf("%d", &i);
#elif B
        printf("The number is odd");
return0;
}

    </p>
</pre>
        <input class="radio control-label" type="radio" id="e_" name="3" value="1" required><label for="e_">Error: unexpected end of file because there is no matching #endif</label><br/>
        <input class="radio control-label" type="radio" id="f_" name="3" value="2" required><label for="f_">The number is odd</label><br/>
        <input class="radio control-label" type="radio" id="g_" name="3" value="3" required><label for="g_">Garbage values</label><br/>
        <input class="radio control-label" type="radio" id="h_" name="3" value="4" required><label for="h_">None of above</label><br/>
        <br/>
        <pre>
    <p>
<span><b>5)</b></span>
#include &lt stdio.h &gt

union emp
{
int empno;
int age;
};

int main()
{
union emp e = {10, 25};
    printf("%d %d", e.empno, e.age);
return0;
}

    </p>
</pre>
        <input class="radio control-label" type="radio" id="i" name="4" value="1" required><label for="i">Error: Lvalue required</label><br/>
        <input class="radio control-label" type="radio" id="j" name="4" value="2" required><label for="j">Error: Rvalue required</label><br/>
        <input class="radio control-label" type="radio" id="k" name="4" value="3" required><label for="k">Error: cannot initialize more than one union member.</label><br/>
        <input class="radio control-label" type="radio" id="l" name="4" value="4" required><label for="l">No error</label><br/>
        <br/>
        <pre><p>
 <span><b>6)</b></span>
#include &lt stdio.h &gt
int main()
{
    printf("%.3lf", sizeof "MIET" / sizeof "MIETIANS");
    return 0;
}

    </p>
</pre>
        <input class="radio control-label" type="radio" id="i_" name="5" value="1" required><label for="i_">0.000</label><br/>
        <input class="radio control-label" type="radio" id="j_" name="5" value="2" required><label for="j_">1.000</label><br/>
        <input class="radio control-label" type="radio" id="k_" name="5" value="3" required><label for="k_">0.667</label><br/>
        <input class="radio control-label" type="radio" id="l_" name="5" value="4" required><label for="l_">Compile error</label><br/>
        <br/>
        <pre><p>
<span><b>7)</b></span>
#include &lt stdio.h &gt
int main()
{
     char* str = "IncludeHelp";
     printf("%c\n", *&*str);
     return 0;
}

    </p>
</pre>
        <input class="radio control-label" type="radio" id="m" name="6" value="1" required><label for="m">Error</label><br/>
        <input class="radio control-label" type="radio" id="n" name="6" value="2" required><label for="n">IncludeHelp</label><br/>
        <input class="radio control-label" type="radio" id="o" name="6" value="3" required><label for="o">I</label><br/>
        <input class="radio control-label" type="radio" id="p" name="6" value="4" required><label for="p">*I</label><br/>
        <br/>
        <pre><p>
<span><b>8)</b></span>
#include &lt stdio.h &gt
int main()
{
    char ch = 10;
    void* ptr = &amp ch;
    printf("%d, %d", *(char*)ptr, ++(*(char*)ptr));
    return 0;
}
    </p>
</pre>
        <input class="radio control-label" type="radio" id="q" name="7" value="1" required><label for="q">11,11</label><br/>
        <input class="radio control-label" type="radio" id="r" name="7" value="2" required><label for="r">10,11</label><br/>
        <input class="radio control-label" type="radio" id="s" name="7" value="3" required><label for="s">ERROR</label><br/>
        <input class="radio control-label" type="radio" id="t" name="7" value="4" required><label for="t">10,10</label><br/>








        <br/>
        <p><pre>
9) What is the output of this program?
    #include &lt iostream &gt
    using namespace std;
    int main()
    {
        int a = 10;
        if (a < 10) {
            for (i = 0; i < 10; i++)
               cout << i;
        }
        else {
            cout << i;
        }
        return 0;
    }

        </p></pre>

        <input class="radio control-label" type="radio" id="q_" name="8" value="1" required><label for="q_">0123456789</label><br/>
        <input class="radio control-label" type="radio" id="r_" name="8" value="2" required><label for="r_">123456789</label><br/>
        <input class="radio control-label" type="radio" id="s_" name="8" value="3" required><label for="s_">0</label><br/>
        <input class="radio control-label" type="radio" id="t_" name="8" value="4" required><label for="t_">Error</label>
        <br/><hr/>

        <p><pre>
10) What is the output of this program?
    #include &lt stdio.h &gt
    #include &lt iostream &gt
    using namespace std;
    int main()
    {
        int a = 21;
        int c ;
        c = a++;
        cout << c;
        return 0;
  	  }

        </p></pre>

        <input class="radio control-label" type="radio"  id="u" name="9" value="1" required><label for="u">21</label><br/>
        <input class="radio control-label" type="radio"  id="v" name="9" value="2" required><label for="v">22</label><br/>
        <input class="radio control-label" type="radio"  id="w" name="9" value="3" required><label for="w">23</label><br/>
        <input class="radio control-label" type="radio"  id="x" name="9" value="4" required><label for="x">20</label>
        <br/><hr/>


        <p><pre>
11) What is the output of this program?
    #include &lt stdio.h &gt
    #include &lt iostream &gt
    using namespace std;
    int main()
    {
        int x = 5, y = 5, z;
        x = ++x; y = --y;
        z = x++ + y--;
        cout << z;
        return 0;
    }

        </p></pre>

        <input class="radio control-label" type="radio" id="y"  name="10" value="1" required><label for="y">10</label><br/>
        <input class="radio control-label" type="radio" id="z"  name="10" value="2" required><label for="z">11</label><br/>
        <input class="radio control-label" type="radio" id="y_"  name="10" value="3" required><label for="y_">9</label><br/>
        <input class="radio control-label" type="radio" id="z_"  name="10" value="4" required><label for="z_">12</label>
        <br/><hr/>


        <p><pre>
12)  What is the output of this program?
    #include &lt iostream &gt
    using namespace std;
    int main()
    {
        void a = 10, b = 10;
        int c;
        c = a + b;
        cout << c;
        return 0;
    }

        </p></pre>

        <input class="radio control-label" type="radio" id="aa" name="11" value="1" required><label for="aa">20</label><br/>
        <input class="radio control-label" type="radio" id="bb" name="11" value="2" required><label for="bb">Compile Time Error</label><br/>
        <input class="radio control-label" type="radio" id="cc" name="11" value="3" required><label for="cc">Run Time Error</label><br/>
        <input class="radio control-label" type="radio" id="dd" name="11" value="4" required><label for="dd">None Of Them Mentioned</label>
        <br/><hr/>


        <p><pre>
13. What is the output of this program?
    #include &lt iostream &gt
    using namespace std;
    int main()
    {
        float num1 = 1.1;
        double num2 = 1.1;
        if (num1 == num2)
           cout << "stanford";
        else
           cout << "harvard";
        return 0;
    }

        </p></pre>

        <input class="radio control-label" type="radio" id="ee" name="12" value="1" required><label for="ee">Harvard</label><br/>
        <input class="radio control-label" type="radio" id="ff" name="12" value="2" required><label for="ff">Stanford</label><br/>
        <input class="radio control-label" type="radio" id="gg" name="12" value="3" required><label for="gg">compile time error</label><br/>
        <input class="radio control-label" type="radio" id="hh" name="12" value="4" required><label for="hh">run time error</label>
        <br/><hr/>


        <p><pre>
14) What is the output of this program?
    #include &lt iostream &gt
    using namespace std;
    int main()
    {
        float f1 = 0.5;
        double f2 = 0.5;
        if (f1 == 0.5f)
            cout << "equal";
        else
            cout << "not equal";
        return 0;
    }

        </p></pre>

        <input class="radio control-label" type="radio" id="ii" name="13" value="1" required><label for="ii">Equal</label><br/>
        <input class="radio control-label" type="radio" id="jj" name="13" value="2" required><label for="jj">Not Equal</label><br/>
        <input class="radio control-label" type="radio" id="kk" name="13" value="3" required><label for="kk">Compile time error</label><br/>
        <input class="radio control-label" type="radio" id="ll" name="13" value="4" required><label for="ll">Run time error</label>
        <br/><hr/>


        <p><pre>
15) What is the output of this program?
    #include &lt iostream &gt
    #include &lt string &gt
    using namespace std;
    int main ()
    {
        string name ("Jobs");
        string family ("Steve");
        name += " Apple ";
        name += family;
        name += '\n';
        cout << name;
        return 0;
  	  }

        </p></pre>

        <input class="radio control-label" type="radio" id="mm" name="14" value="1" required><label for="mm">Steve Jobs</label><br/>
        <input class="radio control-label" type="radio" id="nn" name="14" value="2" required><label for="nn">Apple</label><br/>
        <input class="radio control-label" type="radio" id="oo" name="14" value="3" required><label for="oo">Jobs Apple Steve</label><br/>
        <input class="radio control-label" type="radio" id="pp" name="14" value="4" required><label for="pp">None of the mentioned</label>
        <br/>




        <br/>

        <center><input type="submit" name="sub" id="s" value="SUBMIT" class="btn-primary"></center>
    </form>
</div>
</body>

<script type='text/javascript'>

    var total_seconds = 60 * 16;
    var c_minutes = parseInt(total_seconds / 60);
    var c_seconds = parseInt(total_seconds % 60);

    checkTime();
    function checkTime() {
        document.getElementById('quiz_').innerHTML = 'Time Left  :   ' + c_minutes + 'min  ' + c_seconds + 'sec';
        if (total_seconds <= 0) {
            $("input").removeAttr("required");
            document.getElementById('quizs').submit();
        } else {
            total_seconds = total_seconds - 1;
            c_minutes = parseInt(total_seconds / 60);
            c_seconds = parseInt(total_seconds % 60);
            setTimeout("checkTime()", 1000);
        }
    }

</script>
<script>
    function disableF5(e) { if ((e.which || e.keyCode) == 116) {e.preventDefault()};
        if ((e.which || e.keyCode) == 122) {e.preventDefault();}
        if((e.which||e.keyCode)==27) {e.preventDefault()};
    };
    $(document).on("keydown", disableF5);

</script>
</html>
