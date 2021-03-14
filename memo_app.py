import time
from selenium import webdriver
import gkeepapi
import signal
import os

import account

keep = gkeepapi.Keep()
account = keep.login(account.user_id,account.password)

keywords =[]
keywords = keep.find(query='keyword')


for search_word in keywords:
    try:
        word = search_word.text
        driver = webdriver.Chrome("c:/driver/chromedriver.exe")
        driver.get('https://www.google.com/')
        time.sleep(1)

        search_box = driver.find_element_by_name("q")
        search_box.send_keys(word)
        search_box.submit()
        time.sleep(2)
    finally:
        os.kill(driver.service.process.pid,signal.SIGTERM)


