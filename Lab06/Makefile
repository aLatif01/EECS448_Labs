QueueDemo: main.o Queue.o TestClass.o
	g++ -g -Wall -std=c++11 main.o Queue.o TestClass.o -o QueueDemo

main.o: main.cpp TestClass.h
	g++ -g -std=c++11 -c main.cpp

TestClass.o: TestClass.h TestClass.cpp Queue.h
	g++ -std=c++11 -g -Wall -c TestClass.cpp

clean:
	rm main.o QueueDemo *~
