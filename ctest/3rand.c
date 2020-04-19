#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
    printf("%d\n", rand() % 1000);

    srand(time(0));
    printf("%d\n", rand() % 10000);

    for (int i = 0; i < 1000; i++) {
        srand(time(0));
        printf("%d\n", rand() % 1000);
    }
    return 0;

}
