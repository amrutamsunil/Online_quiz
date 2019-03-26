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
    <script>
        function disableF5(e) { if ((e.which || e.keyCode) == 116) {e.preventDefault()};
            if ((e.which || e.keyCode) == 122) {e.preventDefault();}
            if((e.which||e.keyCode)==27) {e.preventDefault()};
        };
        $(document).on("keydown", disableF5);
        var elem=document.getElementById("b");
        function openFullscreen() {

            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) { /* Firefox */
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE/Edge */
                elem.msRequestFullscreen();
            }
        }
    </script>
</head>

<body onload="openFullscreen()" id="b">
<div>
    <table>
        <tr>
            <td> <img src="lib/Fotoram.io12%20(1).png" height="70px" width="130px"/> </td>
            <th height="87" width=100%><h3>M.I.E.T ENGINEERING COLLEGE,Trichy-620007</h3>vvvvvvvv</th>
        </tr>
    </table>
    <b><div id="quiz_" style=""></div></b>

    <div class="div1" style="margin-left: 30%">na pathu pera adichi don aagala, na adicha pathu perum don thaa.....</div>
    <div class="algn_miet">
        <form method="post" id="quizs" action="index.php">
        <pre><p>
<span><b>1)</b></span>
#include<stdio.h>
void f(int const i)
{
  i=5;
}
void main()
{
 int x = 10;
 f(x);
}
<span><b><pre>•	I - Error in the statement ‘void f(int const i)’
            •	II - Error in the statement i=5.</pre></b></span>

 </p></pre>
            <input class="radio control-label" type="radio"  name="0" value="1" required><label>Statements I & II are true</label><br/>
        <input class="radio control-label" type="radio"  name="0" value="2" required><label>Statements I & II are false.</label><br/>
        <input class="radio control-label" type="radio"  name="0" value="3" required><label>Statement I is true</label><br/>
        <input class="radio control-label" type="radio"  name="0" value="4" required><label>Statement II is true.</label><br/>
        <br/>
            <pre><p>
 <span><b>2)</b></span>
int f(int a, int b)
{
    int a;
    a = 20;
    return a;
}
 </p></pre>
            <input class="radio control-label" type="radio"  name="1" value="1" required><label>Missing parenthesis in return statement</label><br/>
            <input class="radio control-label" type="radio"  name="1" value="2" required><label> The function should be defined as double f(int a, int b)</label><br/>
            <input class="radio control-label" type="radio"  name="1" value="3" required><label> Redeclaration of a</label><br/>
            <input class="radio control-label" type="radio"  name="1" value="4" required><label> None of above</label><br/>
            <br/>

            <pre><p>
<span><b>3)</b></span>
 #include<stdio.h>
int f(int a)
{
  a > 20? return(10): return(20);
}
int main()
{
    int f(int);
    int b;
    b = f(20);
    printf("%d\n", b);
    return 0;
}

                </p></pre>
            <input class="radio control-label" type="radio"  name="2" value="1" required><label>Error: Prototype declaration</label><br/>
            <input class="radio control-label" type="radio"  name="2" value="2" required><label>No error </label><br/>
            <input class="radio control-label" type="radio"  name="2" value="3" required><label>Error: return statement cannot be used with conditional operators </label><br/>
            <input class="radio control-label" type="radio"  name="2" value="4" required><label>None of above </label><br/>
            <br/>
            <pre><p>
<span><b>4)</b></span>
#include<stdio.h>
int main()
{
    int a=10;
    void f();
    a = f();
    printf("%d\n", a);
    return 0;
}
void f()
{
    printf("Hi");
}
                </p></pre>
            <input class="radio control-label" type="radio"  name="3" value="1" required><label>Error: Not allowed assignment</label><br/>
            <input class="radio control-label" type="radio"  name="3" value="2" required><label>Error: Doesn't print anything</label><br/>
            <input class="radio control-label" type="radio"  name="3" value="3" required><label>No error</label><br/>
            <input class="radio control-label" type="radio"  name="3" value="4" required><label>None of above</label><br/>
            <br/>
            <pre><p>
<span><b>5)</b></span>
#include<stdio.h>
int main()
{
    fprintf("MIET");
    printf("%.ef", 2.0);
    return 0;
}

                </p></pre>
            <input class="radio control-label" type="radio"  name="4" value="1" required><label>Error: unknown value in printf() statement.</label><br/>
            <input class="radio control-label" type="radio"  name="4" value="2" required><label>Error: in fprintf() statement </label><br/>
            <input class="radio control-label" type="radio"  name="4" value="3" required><label>No error and prints "MIET" </label><br/>
            <input class="radio control-label" type="radio"  name="4" value="4" required><label>No error and prints "2.0" </label><br/>
            <br/>
            <pre><p>
<span><b>6)</b></span>
#include<stdio.h>
int main()
{
    int a[] = {10, 20, 30, 40, 50};
    int j;
    for(j=0; j<5; j++)
    {
        printf("%d\n", a);
        a++;
    }
    return 0;
}
                </p></pre>
            <input class="radio control-label" type="radio"  name="5" value="1" required><label>Error: Declaration syntax</label><br/>
            <input class="radio control-label" type="radio"  name="5" value="2" required><label>Error: Expression syntax</label><br/>
            <input class="radio control-label" type="radio"  name="5" value="3" required><label>Error: LValue required</label><br/>
            <input class="radio control-label" type="radio"  name="5" value="4" required><label>Error: Rvalue required</label><br/>
            <br/>
            <pre><p>
<span><b>7)</b></span>
 typedef struct data mystruct;
struct data
{
int x;mystruct *b;
};

     </p></pre>
 <input class="radio control-label" type="radio"  name="6" value="1" required><label>Error: in structure declaration</label><br/>
 <input class="radio control-label" type="radio"  name="6" value="2" required><label>Linker Error</label><br/>
 <input class="radio control-label" type="radio"  name="6" value="3" required><label>No Error</label><br/>
 <input class="radio control-label" type="radio"  name="6" value="4" required><label>None of above</label><br/>
 <br/>
<pre><p>
<span><b>8)</b></span>
#include<stdio.h>
int main()
{
    struct emp
    {
        char name[20];
        float sal;
    };
    struct emp e[10];
    int i;
    for(i=0; i<=9; i++)
        scanf("%s %f", e[i].name, &e[i].sal);
    return 0;
}
     </p></pre>
 <input class="radio control-label" type="radio"  name="7" value="1" required><label>Error: invalid structure member</label><br/>
 <input class="radio control-label" type="radio"  name="7" value="2" required><label> Error: Floating point formats not linked</label><br/>
 <input class="radio control-label" type="radio"  name="7" value="3" required><label>No error </label><br/>
 <input class="radio control-label" type="radio"  name="7" value="4" required><label>None of above </label><br/>
 <br/>
 <pre><p>
<span><b>9)</b></span>
#include<stdio.h>

int main()
{
    union a
    {
        int i;
        char ch[2];
    };
    union a z1 = {512};
    union a z2 = {0, 2};
    return 0;
}
     </p></pre>
 <input class="radio control-label" type="radio"  name="8" value="1" required><label>Error: invalid union declaration</label><br/>
 <input class="radio control-label" type="radio"  name="8" value="2" required><label> Error: in Initializing z2</label><br/>
 <input class="radio control-label" type="radio"  name="8" value="3" required><label>No error </label><br/>
 <input class="radio control-label" type="radio"  name="8" value="4" required><label> None of above</label><br/>
 <br/>
 <pre><p>
<span><b>10)</b></span>
#include<stdio.h>
int main()
{
    enum status { pass, fail, atkt};
    enum status stud1, stud2, stud3;
    stud1 = pass;
    stud2 = atkt;
    stud3 = fail;
    printf("%d, %d, %d\n", stud1, stud2, stud3);
    return 0;
}

     </p></pre>
 <input class="radio control-label" type="radio"  name="9" value="1" required><label>0, 1, 2</label><br/>
 <input class="radio control-label" type="radio"  name="9" value="2" required><label>1, 2, 3 </label><br/>
 <input class="radio control-label" type="radio"  name="9" value="3" required><label> 0, 2, 1</label><br/>
 <input class="radio control-label" type="radio"  name="9" value="4" required><label>1, 3, 2 </label><br/>
 <br/>
 <pre><p>
<span><b>11)</b></span>

typedef enum error { warning, test, exception } err;

     </p></pre>
 <input class="radio control-label" type="radio"  name="10" value="1" required><label>It is a typedef for enum error.</label><br/>
 <input class="radio control-label" type="radio"  name="10" value="2" required><label>It is a variable of type enum error </label><br/>
 <input class="radio control-label" type="radio"  name="10" value="3" required><label> The statement is erroneous</label><br/>
 <input class="radio control-label" type="radio"  name="10" value="4" required><label>It is a structure </label><br/>
 <br/>
 <pre><p>
<span><b>12)</b></span>
#include<stdio.h>
int main()
{
    int (*p)() = fun;
    (*p)();
    return 0;
}
 int fun()
{
    printf("MIET.com\n");
    return 0;
}
     </p></pre>
 <input class="radio control-label" type="radio"  name="11" value="1" required><label>Error: in int(*p)() = fun;</label><br/>
 <input class="radio control-label" type="radio"  name="11" value="2" required><label>Error: fun() prototype not defined</label><br/>
 <input class="radio control-label" type="radio"  name="11" value="3" required><label>No error </label><br/>
 <input class="radio control-label" type="radio"  name="11" value="4" required><label> None of these</label><br/>
 <br/>
 <pre><p>
<span><b>13)</b></span>A constructor that accepts __________ parameters is called the default constructor.</p>
 </pre>
            <input class="radio control-label" type="radio"  name="12" value="1" required><label>One</label><br/>
            <input class="radio control-label" type="radio"  name="12" value="2" required><label>Two</label><br/>
            <input class="radio control-label" type="radio"  name="12" value="3" required><label>No</label><br/>
            <input class="radio control-label" type="radio"  name="12" value="4" required><label>Three</label><br/>
            <br/>
            <pre><p>
<span><b>14)</b></span>
#include<stdio.h>
int main()
{
    int i=1;
    for(;;)
    {
        printf("%d\n", i++);
        if(i>10)
           break;
    }
    return 0;
}
</p></pre>
            <input class="radio control-label" type="radio"  name="13" value="1" required><label>There should be a condition in the for loop</label><br/>
            <input class="radio control-label" type="radio"  name="13" value="2" required><label>The two semicolons should be dropped</label><br/>
            <input class="radio control-label" type="radio"  name="13" value="3" required><label>The for loop should be replaced with while loop.</label><br/>
            <input class="radio control-label" type="radio"  name="13" value="4" required><label>No error</label><br/>
            <br/>
 <pre><p>
<span><b>15)</b></span>
#include<stdio.h>
int main()
{
void fun();
int i = 1;
while(i <= 5)
    {
        printf("%d\n", i);
if(i>2)
goto here;
    }
return0;
}
void fun()
{
    here:
    printf("It works");
}
     </p>
 </pre>
<input class="radio control-label" type="radio"  name="14" value="1" required><label>No Error: prints "It works"</label><br/>
<input class="radio control-label" type="radio"  name="14" value="2" required><label>Error: fun() cannot be accessed</label><br/>
<input class="radio control-label" type="radio"  name="14" value="3" required><label>Error: goto cannot takeover control to other function</label><br/>
<input class="radio control-label" type="radio"  name="14" value="4" required><label>No error</label><br/>
            <br/>
<pre><p>
<span><b>16)</b></span>
#include<stdio.h>
int main()
{
int a = 10, b;
    a >=5 ? b=100: b=200;
    printf("%d\n", b);
return0;
}
    </p></pre>
            <input class="radio control-label" type="radio"  name="15" value="1" required><label>100</label><br/>
            <input class="radio control-label" type="radio"  name="15" value="2" required><label>200</label><br/>
            <input class="radio control-label" type="radio"  name="15" value="3" required><label>Error: L value required for b</label><br/>
            <input class="radio control-label" type="radio"  name="15" value="4" required><label>Garbage value</label><br/>
            <br/>
<pre>
    <p>
<span><b>17)</b></span>
#include<stdio.h>
int main()
{
    int i = 10, j = 20;
    if(i = 5) && if(j = 10)
        printf("Have a nice day");
    return 0;
}
    </p>
</pre>
            <input class="radio control-label" type="radio"  name="16" value="1" required><label>Output: Have a nice day</label><br/>
            <input class="radio control-label" type="radio"  name="16" value="2" required><label>No output</label><br/>
            <input class="radio control-label" type="radio"  name="16" value="3" required><label>Error: Expression syntax</label><br/>
            <input class="radio control-label" type="radio"  name="16" value="4" required><label>Error: Undeclared identifier if</label><br/>
            <br/>
<pre>
    <p>
<span><b>18)</b></span>
#include<stdio.h>
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
            <input class="radio control-label" type="radio" name="17" value="1" required><label>1</label><br/>
            <input class="radio control-label" type="radio" name="17" value="2" required><label>2,3</label><br/>
            <input class="radio control-label" type="radio" name="17" value="3" required><label>3,4</label><br/>
            <input class="radio control-label" type="radio" name="17" value="4" required><label>4</label><br/>
            <br/>
            <pre>
    <p>
<span><b>19)</b></span>
#include<stdio.h>

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
            <input class="radio control-label" type="radio" name="18" value="1" required><label>Error: unexpected end of file because there is no matching #endif</label><br/>
            <input class="radio control-label" type="radio" name="18" value="2" required><label>The number is odd</label><br/>
            <input class="radio control-label" type="radio" name="18" value="3" required><label>Garbage values</label><br/>
            <input class="radio control-label" type="radio" name="18" value="4" required><label>None of above</label><br/>
            <br/>
            <pre>
    <p>
<span><b>20)</b></span>
#include<stdio.h>

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
            <input class="radio control-label" type="radio" name="19" value="1" required><label>Error: Lvalue required</label><br/>
            <input class="radio control-label" type="radio" name="19" value="2" required><label>Error: Rvalue required</label><br/>
            <input class="radio control-label" type="radio" name="19" value="3" required><label>Error: cannot initialize more than one union member.</label><br/>
            <input class="radio control-label" type="radio" name="19" value="4" required><label>No error</label><br/>
            <br/>
            <pre><p>
 <span><b>21)</b></span>
#include <stdio.h>
int main()
{
    printf("%.3lf", sizeof "MIET" / sizeof "MIETIANS");
    return 0;
}

    </p>
</pre>
            <input class="radio control-label" type="radio" name="20" value="1" required><label>0.000</label><br/>
            <input class="radio control-label" type="radio" name="20" value="2" required><label>1.000</label><br/>
            <input class="radio control-label" type="radio" name="20" value="3" required><label>0.667</label><br/>
            <input class="radio control-label" type="radio" name="20" value="4" required><label>Compile error</label><br/>
            <br/>
<pre><p>
<span><b>22)</b></span>
#include <stdio.h>
int main()
{
     char* str = "IncludeHelp";
     printf("%c\n", *&*str);
     return 0;
}

    </p>
</pre>
            <input class="radio control-label" type="radio" name="21" value="1" required><label>Error</label><br/>
            <input class="radio control-label" type="radio" name="21" value="2" required><label>IncludeHelp</label><br/>
            <input class="radio control-label" type="radio" name="21" value="3" required><label>I</label><br/>
            <input class="radio control-label" type="radio" name="21" value="4" required><label>*I</label><br/>
            <br/>
<pre><p>
<span><b>23)</b></span>
#include <stdio.h>
int main()
{
    char ch = 10;
    void* ptr = &ch;
    printf("%d, %d", *(char*)ptr, ++(*(char*)ptr));
    return 0;
}
    </p>
</pre>
            <input class="radio control-label" type="radio" name="22" value="1" required><label>11,11</label><br/>
            <input class="radio control-label" type="radio" name="22" value="2" required><label>10,11</label><br/>
            <input class="radio control-label" type="radio" name="22" value="3" required><label>ERROR</label><br/>
            <input class="radio control-label" type="radio" name="22" value="4" required><label>10,10</label><br/>
            <br/>

            <center><input type="submit" name="sub" id="s" value="SUBMIT" class="btn-primary"></center>
        </form>
</div>
</body>

    <script type='text/javascript'>

    var total_seconds = 60 * 10;
    var c_minutes = parseInt(total_seconds / 60);
    var c_seconds = parseInt(total_seconds % 60);

    checkTime();
    function checkTime() {
        document.getElementById('quiz_').innerHTML = 'Time Left:' + c_minutes + 'min' + c_seconds + 'sec';
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
    $(document).bind("keydown", disableF5);

    </script>

</html>
