# HOW-NOT-TO
Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it's really how it works. An example of HOW NOT TO create/design and mistakes learnt from it.
This is an abstract from one of my first freelance projects back when I was new to the domain and was learning as much as I am today.
The thought process that went in at that time is the same for anyone who is new to this work and hopefully, what I learned will enable 
others in having a better approach to their problems. Hope you understand the importance of good design and following the 
standards introduced by our industry experts over the years. Happy Coding!!!

## NO CODE ORGANIZATION
The code base is barely organized, there is no proper container/sperator for the files being used. Having such a code base causes 
problem in the long-run, in terms of maintainability & understanding the application flow.
All the files appear within the same base folder, irrespective of their work domain (i.e., what functinality they provide to the application).
+ All the files are mixed in together with no proper accounting.
+ These kind of an organization causes problem when you need to modify the behaviour of your existing code. You ask how?
  - Well first you don't know where the functionality resides, that you want to modify or extend.
  - You can also see that the naming convention of some of the files are not friendly enough, that will further cause you trouble in 
    figuring the above out.

## BAD DESIGN
If you happen to peek inside the code base, you will see a practical example of coding horror. The code has no structure, it does 
not follow the principles of good (if not best) software design.
+ One can see a lot of repitition. This is the root of most bugs. Repitition == Bugs (:bug:)
+ The number of files is also out of bounds. The **_funny_** part is even ** Github did not allow me to upload so many files. I had to       leave some of them out**.
+ Almost, the same functionality is also put into differant files which could have been designed to implement polymorphism (taking
  different forms based on context).

## NO NOTION OF CODE REUSE
Code Reuse is an imporant concept in Software Design and also in Computer Science as well. Well when taught in your engineering
course, it's very hard to wrap around the idea that code reuse is ever gonna be helpful. But as you build large enough dynamic
systems, you tend to get the picture and benefit of having a reusable code base. When we relate to real world projects, only then
some of the core design ideas become much clearer.
+ The example code performs a lot of repititive tasks in multiple files, yet we see that they are not factored to one reusable 
  unit, but the same logic appears in all the files that perform that task. How is that gonna cause problems, apart from no code 
  reusability, you ask?
  - Well say you want to change the logic someday, first of all you are going to have trouble finding the existing logic and flow 
    of the application, thanks to its organization and design, and once you do find it, you will have to change it in multiple places 
    wherever that logic is being used.
  - Changing in multiple places might (if not often) lead to having inconsistencies or minute but game changing mistakes.

## INEFFICIENT PROGRAMMING PARADIGM
The paradigm used to solve this particular problem (i.e., Web Application Designing) doesn't fit well. There is no proper 
definition of the various entities in the problem domain. There is no proper utilization of Data Models to give a structure 
to the data that the problem uses to drive itself. We could have used an _Object-Oriented_ approach to certain aspects of the 
problem, which would have helped in better organizing the solution and would have also enabled other features that OOP 
makes available to its users.
+ It lacks Abstraction and Encapsulation.
  - There is no proper hiding or in this case, no hiding at all of the various attributes and entities from the outside world.
  - We are not just exposing an interface, but we are keeping everything transparent to the outside world.

## USE OF A FRAMEWORK
Although using a Framework absracts out most of the inner details, when starting out one should know the details that Frameworks 
try very hard to hide from plain sight of the user. And using basic problem domain tools help us in understanding on how and 
what is  being done. But having said that using Frameworks, help us in avoiding certain mistakes that developers have already made 
in their previous work and lets us jump across those pitfalls without having to re-invent the wheel.

# CONCLUSION
Having mentioned the above points, it will be clearer now as to why we should be careful about the design of our solutions right 
from the start. It causes a lot of pain to change things on a larger scale, if their foundation itself is not right. Hence, I shared 
my past experience and view so that one can keep these things in mind and create better solutions as well as choose their designs 
wisely in a manner that it leads to better software health.
