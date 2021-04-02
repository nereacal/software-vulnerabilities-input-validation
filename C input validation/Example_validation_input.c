#include <stdio.h>

int main(){

    int a;
    float b;
    char c;

    printf("Introduce un valor entero para la variable A : ");
    if(scanf("%i", &a) != 1)
        printf("Entero no válido\n");
    else
        printf(" el valor es: %i\n",a);

    printf("Introduce un valor flotante para la variable B : ");
    while((c = getchar()) != '\n' && c != EOF);
    if(scanf("%f", &b) != 1)
        printf("Valor con coma flotante no válido\n");
    else
        printf(" el valor de la variable B es: %f\n",b);

    printf("Introduce un caracter para la variable C : ");
   
    while((c = getchar()) != '\n' && c != EOF);
    if(scanf("%c", &c) != 1)
        printf("Valor caracter no válido\n");
    else
        printf(" el valor de la variable C es: %c\n",c);

    return 0;
}
