#include <stdio.h>   /* Standard input/output definitions */
#include <string.h>  /* String function definitions */
#include <unistd.h>  /* UNIX standard function definitions */
#include <fcntl.h>   /* File control definitions */
#include <errno.h>   /* Error number definitions */
#include <termios.h> /* POSIX terminal control definitions */

/*
 * 'open_port()' - Open serial port 1.
 *
 * Returns the file descriptor on success or -1 on error.
 */

int open_port(void)
{
    int fd; /* File descriptor for the port */


    fd = open("/dev/tnt0", O_RDWR | O_NOCTTY | O_NDELAY);
    if (fd == -1)
    {
        /*
         * Could not open the port.
         */
        perror("open_port: Unable to open /dev/tnt0 - ");
    }

    return (fd);
}

int main(){
    int fd = open_port();

    int n = write(fd, "Hello From Serial!", 4);
    if (n < 0)
        fputs("write() of 4 bytes failed!\n", stderr);
    return 0;
}
