### Windows:
MinGW can be downloaded from here https://sourceforge.net/projects/mingw/files/Installer/
Once installed and given an example of program.c :
1.	Open line command (cmd)
2.	Go to MinGM directory \bin
3.	Compile file: ``` gcc.exe -o nameCompiledFile  pathOfFile\Example.c ```
4.	nameCompiledFile.exe will be generated in MinGW\bin
5.	Execute file nameCompiledFile.exe

### Linux:
Most of Linux distros have already compiler installed so it is much easier to execute:
1.	Open terminal and write: ``` gcc -o nameCompiledFile Example_segmentationFault2.c ```
If a program that uses threads is going to be executed then compilance should be:
``` gcc -pthread -o nameCompiledFile Example.c ```
2.	After compilance, program can be executed:
``` ./nameCompiledFile ```

### Use:
Example_no_validation_input.c requests 3 variables: a integer, b float, c char. Typing a different input unexpected will give error and non desired result.
Example_validation_input.c is the same program validating the input. If the input is unexpected will advice.
