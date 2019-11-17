/**
 * @author Afnan W. Latif
 * @file TestClass.h
 * @date 11.12.2019
 * @brief Test suite for our Queue structure
 **/

 #ifndef TESTCLASS_H
 #define TESTCLASS_H

 #include "Queue.h"

 class TestClass
 {

public:
   TestClass();

   void runTests();

 private:

   /**
    * @pre A queue exists
    * @post Creates a Queue and tests if isEmpty() is returning true
    **/
   void test1();

   /**
    * @pre A queue exists
    * @post Enqueueing makes the Queue not empty
    **/
   void test2();

   /**
    * @pre A queue exists
    * @post Does peekFront() return the correct value
    **/
   void test3();

   /**
    * @pre A queue exists
    * @post Enqueing is adding to the front of the Queue
    **/
   void test4();
   void test5();
   void test6();
   void test7();
   void test8();
   void test9();
 };


#endif TESTCLASS_H
