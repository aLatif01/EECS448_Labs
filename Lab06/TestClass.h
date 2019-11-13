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

   void test1();  //New queue is empty
   void test2();
   void test3();
   void test4();
   void test5();
   void test6();
   void test7();
   void test8();
 };


#endif TESTCLASS_H
