#!/bin/bash

echo "Flutter Crypto Exchange APK Transfer Options"
echo "==========================================="
echo ""
echo "Option 1: Try different port (8080)"
echo "Running HTTP server on port 8080..."
echo "Try accessing http://209.38.97.106:8080 from your mobile device"
echo ""
echo "Press Ctrl+C when done or if this doesn't work to try the next option"

cd /root/syncron_app/download_site
python3 -m http.server 8080
