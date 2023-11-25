#!/usr/bin/env python3
import serial
import time
import sys

file_path="/var/www/html/earthrover/object_detection/web/"

ser = serial.Serial('/dev/ttyACM0', 115200, timeout=1.0)
time.sleep(3)
ser.reset_input_buffer()
print("Serial OK.")

def main():
    # Print the command-line arguments
    print("Command-line arguments:", sys.argv)
    
    command = sys.argv[1]
    if command in ['F', 'B', 'L', 'R', 'S']:
        str_to_send = command + "\n"
        ser.write(str_to_send.encode('utf-8'))
    elif command in ['fire', 'no_fire']:
        f1 = open(file_path + "fire_status.txt", "w")
        f1.write(str(command))
        f1.close() 

if __name__ == "__main__":
    main()
