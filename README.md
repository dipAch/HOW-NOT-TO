# HOW-NOT-TO
Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it's really how it works. An example of HOW NOT TO create/design and mistakes learnt from it.

## ORGANIZATION
The code base is barely organized, there is no proper container/sperator for the files being used. Having such a code base causes 
problem in the long-run, in terms of maintainability & understanding the application flow.
All the files appear within the same base folder, irrespective of their work domain (i.e., what functinality they provide to the application).
+ All the files are mixed in together with no proper accounting.
+ These kind of an organization causes problem when you need to modify the behaviour of your existing code. You ask how?
  - Well first you don't know where the functionality resides, that you want to modify or extend.
  - You can also see that the naming convenion of some of the files are not friendly enough, that will further cause you trouble in 
    figuring the above out.
