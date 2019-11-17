/**
 * @author Afnan W. Latif
 * @file TestClass.cpp
 * @date 11.12.2019
 * @brief Test class function definitions
 **/

 #include "TestClass.h"
 #include <iostream>

TestClass::TestClass()
{

}

void TestClass::runTests()
{
  test1();
  test2();
  test3();
  test4();
  test5();
  test6();
  test7();
  test8();

  std::cout << "\n\n\n END OF TESTING\n";
}

void TestClass::test1()
{
  Queue* test1 = new Queue();
  if(test1->isEmpty())
  {
    std::cout << "\n\n\n";
    std::cout << "Test 01: Newly created queue is empty: PASSED\n";
  }
  else
  {
    std::cout << "Test 01: Newly created queue is empty: FALIED\n";
  }
  delete test1;
}

void TestClass::test2()
{
  Queue* test2 = new Queue();
  test2->enqueue(1);

  if(test2->isEmpty() == false)
  {
    std::cout << "Test 02: Enqueing a value makes the Queue not empty: PASSED\n";
  }
  else
  {
    std::cout << "Test 02: Enqueing a value makes the Queue not empty: FAILED\n";
  }
  delete test2;
}

void TestClass::test3()
{  Queue test4;

  Queue* test3 = new Queue();

  test3->enqueue(1);
  if(test3->peekFront() == 1)
  {
    std::cout << "Test 03: Peek Front returns the correct value when peeking the front of the queue: PASSED\n";
  }
  else
  {
    std::cout << "Test 03: Peek Front returns the correct value when peeking the front of the queue: FAILED\n";
  }

  delete test3;
}

void TestClass::test4()
{
  Queue* test4 = new Queue();
  int firstValue = 0;
  for(int i = 0; i < 4; i++)
  {
    if(i == 0)
    {
      firstValue = i;
    }
    test4->enqueue(i);
  }
  if(test4->peekFront() == firstValue)
  {
    std::cout <<"Test 04: Enqueue is adding to the front of the queue: PASSED\n";
  }
  else
  {
    std::cout <<"Test 04: Enqueue is adding to the front of the queue: FAILED\n";
  }

  delete test4;
}

void TestClass::test5()
{
  Queue* test5 = new Queue();

  int secondElement;
  for(int i = 0; i < 4; i++)
  {
    test5->enqueue(i);  // should be:     FRONT ->   0-1-2-3 <- BACK, but its inputting backwards so its 3-2-1-0
  }

  test5->dequeue(); //now should be: FRONT -> 1-2-3 <- BACK, but it's inputing backwards, so it's really 2-1-0

  if(test5->peekFront() == 2)
  {
    std::cout << "Test 05: Dequeue is removing from the front of the queue: PASSED\n";
  }
  else
  {
    std::cout << "Test 05: Dequeue is removing from the front of the queue: FAILED\n";
  }

  delete test5;
}

void TestClass::test6()
{
  Queue* test6 = new Queue();

  test6->enqueue(1);
  test6->enqueue(2);
  test6->dequeue();
  test6->dequeue();
  test6->enqueue(5);
  if(test6->peekFront() == 5)
  {
    std::cout << "Test 06: Peek front is being updated with the current front value: PASSED\n";
  }
  else
  {
    std::cout << "Test 06: Peek front is being updated with the current front value: FAILED\n";
  }

  delete test6;
}

void TestClass::test7()
{
  Queue* test7 = new Queue();

  test7->enqueue(1);
  test7->dequeue();
  if(test7->isEmpty())
  {
    std::cout << "Test 07: After dequeueing the queue, it is empty: PASSED\n";
  }
  else
  {
    std::cout << "Test 07: After dequeueing the queue, it is empty: FAILED\n";
  }


  delete test7;
}

void TestClass::test8()
{
  Queue* test8 = new Queue();
  try
  {
    test8->peekFront();
  }
  catch(const std::exception& e)
  {
    std::cout << "Test 08: Error caught -- " << e.what() << ": PASSED\n";
  }
  delete test8;
}

void TestClass::test9()
{
  Queue* test9 = new Queue();
  try
  {
    test9->dequeue();
  }
  catch(const std::exception& e)
  {
    std::cout << "Test 09: Error caught -- " << e.what() << ": PASSED\n";
  }
  delete test9;
}
