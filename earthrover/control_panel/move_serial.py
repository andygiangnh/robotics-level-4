#!/usr/bin/env python3
import serial
import time
import sys

ser = serial.Serial('/dev/ttyACM0', 115200, timeout=1.0)
time.sleep(3)
ser.reset_input_buffer()
print("Serial OK.")

def main():
    # Print the command-line arguments
    print("Command-line arguments:", sys.argv)
    
    command = sys.argv[1]
    if command in ['F', 'B', 'L', 'R', 'S']:
            print("Send command to Arduino: " + user_input)
            str_to_send = command + "\n"
            ser.write(str_to_send.encode('utf-8'))

if __name__ == "__main__":
    main()