HTML5 holds form controls to allow validating user data input as follows:
- ```required```
- ```minleght``` and ```maxlenght``` (strings)
- ```min``` ànd ```max``` (numerical)
- ```type```
- ```pattern```

CSSs pseudo-classes such as ```:valid``` will apply styles for valid elements and ```:invalid``` or ```:out-of-range``` fot invalid elements. More even, browser will
block the form and display an error message and no submit action will proceed.

The following error messages can be displayed:
- ```badInput```: User is providing input unable to convert by browser.
- ```patternMismatch``` : Occurs when an input is beeing edited by user and does not conform to the constraints set by the element's pattern attribute.
- ```rangeOverflow```: Field being edited does not adjust to restrictions of the element's max attribute
- ```rangeUnderflow```: Just the opposite of ```rangeOverflow```, min attribute.
- ```stepMismatch```: If an edited input does not conform to the constraints set by the step's attribute.
- ```tooLong```: Given a maxlenght attribute of an input or textarea, this will happen if editing exceed the given lenght.
- ```tooShort```: Opposite to ```tooLong```
- ```typeMismatch```
- ```valueMissing```
- ```customError```
