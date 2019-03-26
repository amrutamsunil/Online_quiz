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
<b><div id="quiz_" style="margin-left: 75%; color: red; height: 50px; width: 300px;text-align: center;font-size: 25px;"></div></b>
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
1) What will be the output of following?
void main()
{
    int m, i = 0, j = 1, k = 2;
    m = i++ || j++ || k++;
    printf("%d %d %d %d", m, i, j, k);
}

 </p></pre>
            <input class="radio control-label" type="radio" id="a__"  name="0" value="1" required><label for="a__">1 1 2 3</label><br/>
            <input class="radio control-label" type="radio"  id="b__" name="0" value="2" required><label for="b__">1 1 2 2</label><br/>
            <input class="radio control-label" type="radio" id="c__" name="0" value="3" required><label for="c__">0 1 2 2</label><br/>
            <input class="radio control-label" type="radio" id="d__" name="0" value="4" required><label for="d__">0 1 2 3</label><br/>
            <br/><hr/>
            <pre><p>
2) What will be the  output of the following program?
#include &lt stdio.h &gt
#include &lt string.h &gt
void main()
{
    printf("%d %d", sizeof("program"), strlen("program"));
}


 </p></pre>
            <input class="radio control-label" type="radio" id="a_" name="1" value="1" required><label for="a_">7 7</label><br/>
            <input class="radio control-label" type="radio"  id="b_" name="1" value="2" required><label for="b_">8 8</label><br/>
            <input class="radio control-label" type="radio"  id="c_" name="1" value="3" required><label for="c_">8 7</label><br/>
            <input class="radio control-label" type="radio"  id="d_" name="1" value="4" required><label for="d_">7 8</label><br/>
            <br/><hr/>
            <pre> <p>

3) Find the output of the following program ?
#include &lt iostream"
using namespace std;

class X {
private:
  static const int a = 76;
public:
  static int getA() { return a; }
};

int main() {
  cout <<X::getA()<<endl;
  return 0;
}
            </p>
            </pre>

            <input class="radio control-label" type="radio" id="q" name="2" value="1" required><label for="q">prints 87</label><br/>
            <input class="radio control-label" type="radio" id="w" name="2" value="2" required><label for="w">compile time error </label><br/>
            <input class="radio control-label" type="radio" id="e" name="2" value="3" required><label for="e"> prints 76</label><br/>
            <input class="radio control-label" type="radio" id="r" name="2" value="4" required><label for="r">none of above </label><br/>
            <br/><hr/>
            <p><pre>

 4) #include &lt iostream &gt
using namespace std;
class Point {
    Point() { cout << "Constructor called"; }
};

int main()
{
   Point t1;
   return 0;
}

            </p></pre>

            <input class="radio control-label" type="radio"  id="t" name="3" value="1" required><label for="t">Compiler Error</label><br/>
            <input class="radio control-label" type="radio"  id="y" name="3" value="2" required><label for="y">Runtime Error </label><br/>
            <input class="radio control-label" type="radio"   id="u" name="3" value="3" required><label for="u"> Constructor called</label><br/>
            <input class="radio control-label" type="radio"  id="i" name="3" value="4" required><label for="i">No Output </label>
            <br/><hr/>

            <p><pre>

5)

# include &lt stdio.h &gt
# define scanf  "%s MIET"
Void main()
{
    printf(scanf, scanf);
    getchar();
    return 0;
 }

            </p></pre>

            <input class="radio control-label" type="radio" id="o" name="4" value="1" required><label for="o">Compile Error</label><br/>
            <input class="radio control-label" type="radio" id="p" name="4" value="2" required><label for="p">%s MIET MIET</label><br/>
            <input class="radio control-label" type="radio" id="a" name="4" value="3" required><label for="a">%s MIET</label><br/>
            <input class="radio control-label" type="radio" id="s" name="4" value="4" required><label for="s">No Output </label>
            <br/><hr/>

            <p><pre>

6)

#include &lt stdio.h &gt
int main()
{
    float a=0.7d;
    if(a<0.7)
         printf("C");
        else
         printf("C++");
    return 0;
}


            </p></pre>

            <input class="radio control-label" type="radio" id="d" name="5" value="1" required><label for="d">Compilation error</label><br/>
            <input class="radio control-label" type="radio" id="f" name="5" value="2" required><label for="f">C++</label><br/>
            <input class="radio control-label" type="radio" id="g" name="5" value="3" required><label for="g">C</label><br/>
            <input class="radio control-label" type="radio" id="h" name="5" value="4" required><label for="h">No Output </label>
            <br/><hr/>

            <p><pre>

7)

#include &lt iostream &gt
using namespace std;
int main()
{
    int x = 0;
    x = printf("Hello World");
    printf(" %d", x);
    return 0;
}


            </p></pre>

            <input class="radio control-label" type="radio" id="j" name="6" value="1" required><label for="j">Hello World 10</label><br/>
            <input class="radio control-label" type="radio" id="k" name="6" value="2" required><label for="k">Hello World 11</label><br/>
            <input class="radio control-label" type="radio" id="l" name="6" value="3" required><label for="l">Hello World 12</label><br/>
            <input class="radio control-label" type="radio" id="z" name="6" value="4" required><label for="z">Hello World 0 </label>
            <br/><hr/>

            <p><pre>

8)

 #include &lt stdio.h &gt
 void main()
{
     int i = 10;
     static int x = i;
     if (x == i)
        printf("equal");
     else if (x < i)))
        printf("less than");
     else
        printf("greater than");
 }

            </p></pre>

            <input class="radio control-label" type="radio" id="x" name="7" value="1" required><label for="x">equal</label><br/>
            <input class="radio control-label" type="radio" id="n" name="7" value="2" required><label for="n">greater than</label><br/>
            <input class="radio control-label" type="radio" id="v" name="7" value="3" required><label for="v">less than</label><br/>
            <input class="radio control-label" type="radio" id="m" name="7" value="4" required><label for="m">compiler error </label>
            <br/><hr/>

            <p><pre>
9)

#include &lt stdio.h &gt
void main()
{
    int colour = 2;
    switch (colour) {
    case 0:
        printf("Black");
    case 1:
        printf("Red");
    case 2:
        printf("Aqua");
    case 3:
        printf("Green");
    default:
        printf("Other");
    }
}

            </p></pre>

            <input class="radio control-label" type="radio" id="q_" name="8" value="1" required><label for="q_">Aqua</label><br/>
            <input class="radio control-label" type="radio" id="w_" name="8" value="2" required><label for="w_">AquaGreenOther</label><br/>
            <input class="radio control-label" type="radio" id="e_" name="8" value="3" required><label for="e_">AquaGreen</label><br/>
            <input class="radio control-label" type="radio" id="r_" name="8" value="4" required><label for="r_">Red </label>
            <br/><hr/>


            <p><pre>
 10)What will be the output of the program if the size of pointer is 4-bytes?
#include &lt stdio.h &gt
int main()
{
    printf("%d, %d\n", sizeof(NULL), sizeof(""));
    return 0;
}

            </p></pre>

            <input class="radio control-label" type="radio" id="y_" name="9" value="1" required><label for="y_">2,1`</label><br/>
            <input class="radio control-label" type="radio" id="u_" name="9" value="2" required><label for="u_">2,2</label><br/>
            <input class="radio control-label" type="radio" id="i_" name="9" value="3" required><label for="i_">4,1</label><br/>
            <input class="radio control-label" type="radio" id="o_" name="9" value="4" required><label for="o_">4,2</label>
            <br/><hr/>

            <p><pre>
11)What will be the output of the program ?
#include &lt stdio.h &gt

int main()
{
    void *vp;
    char ch=74, *cp="JACK";
    int j=65;
    vp=&amp ch;
    printf("%c", *(char*)vp);
    vp=&amp j;
    printf("%c", *(int*)vp);
    vp=cp;
    printf("%s", (char*)vp+2);
    return 0;
}


            </p></pre>

            <input class="radio control-label" type="radio" id="qw" name="10" value="1" required><label for="qw">JCK</label><br/>
            <input class="radio control-label" type="radio" id="er" name="10" value="2" required><label for="er">J65K</label><br/>
            <input class="radio control-label" type="radio" id="ty" name="10" value="3" required><label for="ty">JAK</label><br/>
            <input class="radio control-label" type="radio" id="ui" name="10" value="4" required><label for="ui">JACK37</label>
            <br/><hr/>

            <p><pre>
12)Which of the following statement is correct about the program?
#include &lt stdio.h &gt

int main()
{
    FILE *fp;
    char ch;
    int i=1;
    fp = fopen("myfile.c", "r");
    while((ch=getc(fp))!=EOF)
    {
        if(ch == '\n')
            i++;
    }
    fclose(fp);
    return 0;
}

            </p></pre>

            <input class="radio control-label" type="radio" id="op" name="11" value="1" required><label for="op" >The code counts number of characters in the file</label><br/>
            <input class="radio control-label" type="radio" id="as" name="11" value="2" required><label for="as">The code counts number of words in the file</label><br/>
            <input class="radio control-label" type="radio" id="df" name="11" value="3" required><label for="df">The code counts number of blank lines in the file</label><br/>
            <input class="radio control-label" type="radio" id="gh" name="11" value="4" required><label for="gh">The code counts number of lines in the file</label>
            <br/><hr/>

            <p><pre>
13)Find Error/Output in follwing code:

int main()

{

  printf("%d%d%d", sizeof(3.14f), sizeof(3.14l));

}

            </p></pre>

            <input class="radio control-label" type="radio" id="jk" name="12" value="1" required><label for="kj">4160</label><br/>
            <input class="radio control-label" type="radio" id="lz" name="12" value="2" required><label for="lz">844</label><br/>
            <input class="radio control-label" type="radio" id="xc" name="12" value="3" required><label for="xc">3284</label><br/>
            <input class="radio control-label" type="radio" id="vb" name="12" value="4" required><label for="vb">None of the above</label>
            <br/><hr/>

            <p><pre>
14) What is the output of this program?
    #include &lt iostream &gt
    using namespace std;
    void addprint()
    {
        static int s = 1;
        s++;
        cout << s;
    }
    int main()
    {
        addprint();
        addprint();
        addprint();
        return 0;
    }

            </p></pre>

            <input class="radio control-label" type="radio" id="aa" name="13" value="1" required><label for="aa">234</label><br/>
            <input class="radio control-label" type="radio" id="bb" name="13" value="2" required><label for="bb">111</label><br/>
            <input class="radio control-label" type="radio" id="cc" name="13" value="3" required><label for="cc">123</label><br/>
            <input class="radio control-label" type="radio" id="dd" name="13" value="4" required><label for="dd">235</label>
            <br/><hr/>

            <p><pre>
15) What is the output of this program?
       #include &lt iostream &gt
    using namespace std;
    void addprint()
    {
        static int s = 1;
        s++;
        cout << s;
    }
    int main()
    {
        addprint();
        addprint();
        addprint();
        return 0;
    }


            </p></pre>

            <input class="radio control-label" type="radio" id="ee" name="14" value="1" required><label for="ee">234</label><br/>
            <input class="radio control-label" type="radio" id="ff" name="14" value="2" required><label for="ff">111</label><br/>
            <input class="radio control-label" type="radio" id="gg" name="14" value="3" required><label for="gg">123</label><br/>
            <input class="radio control-label" type="radio" id="hh" name="14" value="4" required><label for="hh">235</label>
            <br/><hr/>

            <br/><hr/>
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

</script>
<script>
    function disableF5(e) { if ((e.which || e.keyCode) == 116) {e.preventDefault()};
        if ((e.which || e.keyCode) == 122) {e.preventDefault();}
        if((e.which||e.keyCode)==27) {e.preventDefault()};
    };
    $(document).on("keydown", disableF5);

</script>
</html>
