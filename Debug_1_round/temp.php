<pre><p>
<span><b>1)</b></span>
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
<span><b>2)</b></span>
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
<span><b>3)</b></span>
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
<span><b>4)</b></span>
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
<span><b>5)</b></span>
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
 <span><b>6)</b></span>
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
<span><b>7)</b></span>
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
<span><b>8)</b></span>
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
<!---------------------------------------------------------------------------------------------------------------->
<p><pre>
9) What is the output of this program?
    #include "iostream"
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

<input class="radio control-label" type="radio"  name="15" value="1" required><label>0123456789</label><br/>
<input class="radio control-label" type="radio"  name="15" value="2" required><label>123456789</label><br/>
<input class="radio control-label" type="radio"  name="15" value="3" required><label>0</label><br/>
<input class="radio control-label" type="radio"  name="15" value="4" required><label>Error</label>
<br/><hr/>

<p><pre>
10) What is the output of this program?
    #include "stdio.h"
    #include "iostream"
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

<input class="radio control-label" type="radio"  name="16" value="1" required><label>21</label><br/>
<input class="radio control-label" type="radio"  name="16" value="2" required><label>22</label><br/>
<input class="radio control-label" type="radio"  name="16" value="3" required><label>23</label><br/>
<input class="radio control-label" type="radio"  name="16" value="4" required><label>20</label>
<br/><hr/>


<p><pre>
11) What is the output of this program?
    #include "stdio.h"
    #include "iostream"
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

<input class="radio control-label" type="radio"  name="17" value="1" required><label>10</label><br/>
<input class="radio control-label" type="radio"  name="17" value="2" required><label>11</label><br/>
<input class="radio control-label" type="radio"  name="17" value="3" required><label>9</label><br/>
<input class="radio control-label" type="radio"  name="17" value="4" required><label>12</label>
<br/><hr/>


<p><pre>
12)  What is the output of this program?
    #include "iostream"
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

<input class="radio control-label" type="radio"  name="18" value="1" required><label>20</label><br/>
<input class="radio control-label" type="radio"  name="18" value="2" required><label>Compile Time Error</label><br/>
<input class="radio control-label" type="radio"  name="18" value="3" required><label>Run Time Error</label><br/>
<input class="radio control-label" type="radio"  name="18" value="4" required><label>None Of Them Mentioned</label>
<br/><hr/>


<p><pre>
13. What is the output of this program?
    #include "iostream"
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

<input class="radio control-label" type="radio"  name="19" value="1" required><label>Harvard</label><br/>
<input class="radio control-label" type="radio"  name="19" value="2" required><label>Stanford</label><br/>
<input class="radio control-label" type="radio"  name="19" value="3" required><label>compile time error</label><br/>
<input class="radio control-label" type="radio"  name="19" value="4" required><label>run time error</label>
<br/><hr/>


<p><pre>
14) What is the output of this program?
    #include "iostream"
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

<input class="radio control-label" type="radio"  name="20" value="1" required><label>Equal</label><br/>
<input class="radio control-label" type="radio"  name="20" value="2" required><label>Not Equal</label><br/>
<input class="radio control-label" type="radio"  name="20" value="3" required><label>Compile time error</label><br/>
<input class="radio control-label" type="radio"  name="20" value="4" required><label>Run time error</label>
<br/><hr/>


<p><pre>
15) What is the output of this program?
    #include "iostream"
    #include "string"
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

<input class="radio control-label" type="radio"  name="21" value="1" required><label>Steve Jobs</label><br/>
<input class="radio control-label" type="radio"  name="21" value="2" required><label>Apple</label><br/>
<input class="radio control-label" type="radio"  name="21" value="3" required><label>Jobs Apple Steve</label><br/>
<input class="radio control-label" type="radio"  name="21" value="4" required><label>None of the mentioned</label>
<br/>


<!-----------------dsadvlvkanvldaknvlkdanvlaknvdlaknvdlaknvldaknvlkanvlaknvdalnvdlanvlisjbdsojblsbnlabkanbla--------->
