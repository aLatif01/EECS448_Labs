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

   /**
    * @pre A queue exists
    * @post Dequeueing removes from the front of the queue
    **/
   void test5();

   /**
    * @pre A queue exists
    * @post peekFront() is being updated with current front value
    **/
   void test6();

   /**
    * @pre A queue exists
    * @post After removing all enqueues, the queue is empty
    **/
   void test7();

   /**
    * @pre A queue exists
    * @post Tests if proper error messages are thrown
    * @throw throws error front peeking an empty queue
    **/
   void test8();

   /**
    * @pre A queue exists
    * @post Tests if dequeing error messages are working
    * @throw throws error for dequeueing an empty queue
    **/
   void test9();
 };


#endif TESTCLASS_H
