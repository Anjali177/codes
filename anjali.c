#include<stdio.h>
#define max 8
void main()
{
int stack1[max],stack2[max],choice,top1=-1,top2=-1,x;
printf("enter the choice");
scanf("%d",&choice);
do
{
printf("press 1 for push into stack 1\n");
printf("press 2 for push into stack2\n");
printf("press 3 for pop from stack1\n");
printf("press 4 for pop from stack2\n");
printf("press 5 for exit");


    switch(choice)
 {
 case 1: printf("enter the element");
        scanf("%d",&x);
        push(x,stack1,&top1,&top2);
          break;
case 2 : printf("enter the element");
          scanf("%d",&x);
           push(x,stack2,&top2,&top1);
           break;

case 3: x=pop(stack1,&top1);
         printf("%d",x);
         break;
 case 4: x=pop(stack2,&top2);
        printf("%d",x);
        break;
 case 5 : printf("exit");
          break;
}
}while(choice!=5);
}


void push(int x,int stack[],int *top1,int *top2)
{
  if (*top1==max-*top2)
     {
     printf("overflow");
     return;
     }
   else
   {
     *top1=*top1+1;
     stack[*top1]=x;
     }
}

int pop(int stack[],int *top)
{
  int x;
  if(*top==-1)
  {
  printf("underflow");
  return(-1);
  }
x=stack[*top];
*top=*top-1;
return(x);
}
