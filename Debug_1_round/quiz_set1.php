<?php
include ('dbconfig.php');
$check=mysqli_query($conn,"select id from users where attempt=1 and id=".$_SESSION['user']." ");
$chk=mysqli_num_rows($check);
if($chk==true){
    header('location:thankyou.php');
}
else {

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

            .algn_miet {
                margin-left: 20%;
            }
        </style>


    </head>

    <body><br/>
    <table>
        <tr>
            <td><img src="lib/Fotoram.io12%20(1).png" height="80px" width="150px" style="margin-left: 20%"/></td>
            <th height="87" width=100%><img src="lib/tisca.png" height="120px" width="450px" style="margin-left: 30%">
            </th>
        </tr>
    </table>
    <b>
        <div id="quiz_"
             style="margin-left: 75%; color: red; height: 50px; width: 300px;text-align: center;font-size: 25px;"></div>
    </b>
    <div class="jumbotron" style="margin-left: 30%">
        <h6>INSTRUCTIONS : </h6>
        <ol type="i">
            <li><b>Don't exit full screen mode, else your mark will be submitted as <span style="color: red">zero</span>.
                </b></li>
            <li><b> Don't Refresh the page , else your mark will be submitted as <span style="color: red">zero</span>.
                </b></li>
            <li><b>Dont Go Back , else your mark will be submitted as <span style="color: red">zero</span>.</b></li>
            <li><b>You can submit only after answering all the questions.</b></li>
            <li><b>It will automatically submitted, when time ends </b></li>
            <li><b>There will be no error with the header files</b></li>
        </ol>

    </div>
    id=
    <div class="algn_miet">
        <form method="post" id="quizs" action="result.php">
        <pre><p>
<span><b>1)</b></span>
#include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="a" name="0" value="1" required><label for="a">Statements
                I & II are true</label><br/>
            <input class="radio control-label" type="radio" id="b" name="0" value="2" required><label for="b">Statements
                I & II are false.</label><br/>
            <input class="radio control-label" type="radio" id="c" name="0" value="3" required><label for="c">Statement
                I is true</label><br/>
            <input class="radio control-label" type="radio" id="d" name="0" value="4" required><label for="d">Statement
                II is true.</label><br/>
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
            <input class="radio control-label" type="radio" id="a_" name="1" value="1" required><label for="a_">Missing
                parenthesis in return statement</label><br/>
            <input class="radio control-label" type="radio" id="b_" name="1" value="2" required><label for="b_"> The
                function should be defined as double f(int a, int b)</label><br/>
            <input class="radio control-label" type="radio" id="c_" name="1" value="3" required><label for="c_">
                Redeclaration of a</label><br/>
            <input class="radio control-label" type="radio" id="d_" name="1" value="4" required><label for="d_"> None of
                above</label><br/>
            <br/>

            <pre><p>
<span><b>3)</b></span>
 #include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="e" name="2" value="1" required><label for="e_">Error:
                Prototype declaration</label><br/>
            <input class="radio control-label" type="radio" id="f" name="2" value="2" required><label for="f_">No
                error </label><br/>
            <input class="radio control-label" type="radio" id="g" name="2" value="3" required><label for="g_">Error:
                return statement cannot be used with conditional operators </label><br/>
            <input class="radio control-label" type="radio" id="h" name="2" value="4" required><label for="h_">None of
                above </label><br/>
            <br/>
            <pre><p>
<span><b>4)</b></span>
#include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="e_" name="3" value="1" required><label for="e_">Error:
                Not allowed assignment</label><br/>
            <input class="radio control-label" type="radio" id="f_" name="3" value="2" required><label for="f_">Error:
                Doesn't print anything</label><br/>
            <input class="radio control-label" type="radio" id="g_" name="3" value="3" required><label for="g_">No
                error</label><br/>
            <input class="radio control-label" type="radio" id="h_" name="3" value="4" required><label for="h_">None of
                above</label><br/>
            <br/>
            <pre><p>
<span><b>5)</b></span>
#include &lt stdio.h &gt
int main()
{
    fprintf("MIET");
    printf("%.ef", 2.0);
    return 0;
}

                </p></pre>
            <input class="radio control-label" type="radio" id="i" name="4" value="1" required><label for="i">Error:
                unknown value in printf() statement.</label><br/>
            <input class="radio control-label" type="radio" id="j" name="4" value="2" required><label for="j">Error: in
                fprintf() statement </label><br/>
            <input class="radio control-label" type="radio" id="k" name="4" value="3" required><label for="k">No error
                and prints "MIET" </label><br/>
            <input class="radio control-label" type="radio" id="l" name="4" value="4" required><label for="l">No error
                and prints "2.0" </label><br/>
            <br/>
            <pre><p>
<span><b>6)</b></span>
#include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="i_" name="5" value="1" required><label for="i_">Error:
                Declaration syntax</label><br/>
            <input class="radio control-label" type="radio" id="j_" name="5" value="2" required><label for="j_">Error:
                Expression syntax</label><br/>
            <input class="radio control-label" type="radio" id="k_" name="5" value="3" required><label for="k_">Error:
                LValue required</label><br/>
            <input class="radio control-label" type="radio" id="l_" name="5" value="4" required><label for="l_">Error:
                Rvalue required</label><br/>
            <br/>
            <pre><p>
<span><b>7)</b></span>
 typedef struct data mystruct;
struct data
{
int x;mystruct *b;
};

     </p></pre>
            <input class="radio control-label" type="radio" id="m" name="6" value="1" required><label for="m_">Error: in
                structure declaration</label><br/>
            <input class="radio control-label" type="radio" id="n" name="6" value="2" required><label for="n_">Linker
                Error</label><br/>
            <input class="radio control-label" type="radio" id="o" name="6" value="3" required><label for="o_">No
                Error</label><br/>
            <input class="radio control-label" type="radio" id="p" name="6" value="4" required><label for="p_">None of
                above</label><br/>
            <br/>
            <pre><p>
<span><b>8)</b></span>
#include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="q" name="7" value="1" required><label for="q">Error:
                invalid structure member</label><br/>
            <input class="radio control-label" type="radio" id="r" name="7" value="2" required><label for="r"> Error:
                Floating point formats not linked</label><br/>
            <input class="radio control-label" type="radio" id="s" name="7" value="3" required><label for="s">No
                error </label><br/>
            <input class="radio control-label" type="radio" id="t" name="7" value="4" required><label for="t">None of
                above </label><br/>
            <br/>
            <pre><p>
<span><b>9)</b></span>
#include &lt stdio.h &gt

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
            <input class="radio control-label" type="radio" id="q_" name="8" value="1" required><label for="q_">Error:
                invalid union declaration</label><br/>
            <input class="radio control-label" type="radio" id="r_" name="8" value="2" required><label for="r_"> Error:
                in Initializing z2</label><br/>
            <input class="radio control-label" type="radio" id="s_" name="8" value="3" required><label for="s_">No
                error </label><br/>
            <input class="radio control-label" type="radio" id="t_" name="8" value="4" required><label for="t_"> None of
                above</label><br/>
            <br/>
            <pre><p>
<span><b>10)</b></span>
#include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="u" name="9" value="1" required><label for="u">0, 1,
                2</label><br/>
            <input class="radio control-label" type="radio" id="v" name="9" value="2" required><label for="v">1, 2,
                3 </label><br/>
            <input class="radio control-label" type="radio" id="w" name="9" value="3" required><label for="w"> 0, 2,
                1</label><br/>
            <input class="radio control-label" type="radio" id="x" name="9" value="4" required><label for="x">1, 3,
                2 </label><br/>
            <br/>
            <pre><p>
<span><b>11)</b></span>

typedef enum error { warning, test, exception } err;

     </p></pre>
            <input class="radio control-label" type="radio" id="y" name="10" value="1" required><label for="y">It is a
                typedef for enum error.</label><br/>
            <input class="radio control-label" type="radio" id="z" name="10" value="2" required><label for="z">It is a
                variable of type enum error </label><br/>
            <input class="radio control-label" type="radio" id="y_" name="10" value="3" required><label for="y_"> The
                statement is erroneous</label><br/>
            <input class="radio control-label" type="radio" id="z_" name="10" value="4" required><label for="z_">It is a
                structure </label><br/>
            <br/>
            <pre><p>
<span><b>12)</b></span>
#include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="aa" name="11" value="1" required><label for="aa">Error:
                in int(*p)() = fun;</label><br/>
            <input class="radio control-label" type="radio" id="bb" name="11" value="2" required><label for="bb">Error:
                fun() prototype not defined</label><br/>
            <input class="radio control-label" type="radio" id="cc" name="11" value="3" required><label for="cc">No
                error </label><br/>
            <input class="radio control-label" type="radio" id="dd" name="11" value="4" required><label for="dd"> None
                of these</label><br/>
            <br/>
            <pre><p>
<span><b>13)</b></span>A constructor that accepts __________ parameters is called the default constructor.</p>
 </pre>
            <input class="radio control-label" type="radio" id="ee" name="12" value="1" required><label
                    for="ee">One</label><br/>
            <input class="radio control-label" type="radio" id="ff" name="12" value="2" required><label
                    for="ff">Two</label><br/>
            <input class="radio control-label" type="radio" id="gg" name="12" value="3" required><label
                    for="gg">No</label><br/>
            <input class="radio control-label" type="radio" id="hh" name="12" value="4" required><label
                    for="hh">Three</label><br/>
            <br/>
            <pre><p>
<span><b>14)</b></span>
#include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="ii" name="13" value="1" required><label for="ii">There
                should be a condition in the for loop</label><br/>
            <input class="radio control-label" type="radio" id="jj" name="13" value="2" required><label for="jj">The two
                semicolons should be dropped</label><br/>
            <input class="radio control-label" type="radio" id="kk" name="13" value="3" required><label for="kk">The for
                loop should be replaced with while loop.</label><br/>
            <input class="radio control-label" type="radio" id="ll" name="13" value="4" required><label for="ll">No
                error</label><br/>
            <br/>
            <pre><p>
<span><b>15)</b></span>
#include &lt stdio.h &gt
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
            <input class="radio control-label" type="radio" id="mm" name="14" value="1" required><label for="mm">No
                Error: prints "It works"</label><br/>
            <input class="radio control-label" type="radio" id="nn" name="14" value="2" required><label for="nn">Error:
                fun() cannot be accessed</label><br/>
            <input class="radio control-label" type="radio" id="oo" name="14" value="3" required><label for="oo">Error:
                goto cannot takeover control to other function</label><br/>
            <input class="radio control-label" type="radio" id="pp" name="14" value="4" required><label for="pp">No
                error</label><br/>
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
        function disableF5(e) {
            if ((e.which || e.keyCode) == 116) {
                e.preventDefault()
            }
            ;
            if ((e.which || e.keyCode) == 122) {
                e.preventDefault();
            }
            if ((e.which || e.keyCode) == 27) {
                e.preventDefault()
            }
            ;
        };
        $(document).on("keydown", disableF5);

    </script>
    </html>
    <?php
}
?>