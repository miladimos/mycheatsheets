from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

url = 'http://google.com'

options = webdriver.ChromeOptions()
options.add_argument("--disable-notifications")
prefs = {"profile.default_content_setting_values.geolocation":2}
options.add_experimental_option("prefs", prefs)


driver = webdriver.Chrome()
driver.get(url)

print(driver.title)
print(driver.current_url)
# driver.find_element_by_name('q').send_keys('flask', Keys.ENTER)
# print(driver.title)
# print(driver.maximize_window())
# driver.find_element_by_xpath("").click()
driver.execute_script('window.scrollTo(0,500)')