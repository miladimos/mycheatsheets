from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import Select
from selenium.webdriver import Actionchains

import time

url = 'http://google.com'

options = webdriver.ChromeOptions()
options.add_argument("--disable-notifications")
options.add_argument("--disable-extentions")
options.add_argument("disable-infobars")
prefs = {"profile.default_content_setting_values.geolocation":2}
options.add_experimental_option("prefs", prefs)


driver = webdriver.Chrome()
driver.get(url)

# print(driver.title)
# print(driver.current_url)
# print(driver.maximize_window())

# driver.find_element_by_name('q').send_keys('flask', Keys.ENTER)

# driver.find_element_by_xpath("").click()

# findedElements = driver.fine_elements(By.CLASS_NAME, 'className')
 
#  byIdFinded = driver.find_element(By.ID, 'idTest')

# Select Box
# choises = driver.find_element(By.ID, 'select')
# selectChoises = Select(choises)

# selectChoises.select_by_visible_text('select 1')
# selectChoises.select_by_index(3)
# selectChoises.select_by_value('select 3')

# print(len(selectChoises.options))


# Links

# links = driver.find_elements(By.TAG_NAME, 'a')

# for link in links:
#     print(link.text)

# driver.find_element(By.PARTIAL_LINK_NAME, 'M')
    
    
# Skip Alerts
# driver.switch_to_alert().accept()

# Frames

# driver.switch_to.frame("Two")
# driver.switch_to.default_content()


# Handle

# handles = driver.window_handles # list of opend pages with unique id

# for window in handles:
#     driver.switch_to.window(window)
#     print(window.title)


# Tables 
# rows = driver.find_element(By.XPATH, "tr")

# Scroll

# driver.execute_script('window.scrollTo(0,500)')
# el = driver.find_element(By.ID, 'd')
# driver.execute_script("arguments[0].scrollIntoView();",el)


# Action Chains 

# el = driver.find_element(By.XPATH, '')
# action = Actionchains(driver) 
# action.move_to_element(el).move_to_element(el2).click().perform() 

# action.context_click(el).perform()
# driver.find_element(By.XPATH, '').send_keys('fsdf')
# action.double_click(el).perform()
# action.drag_and_drop(start, end).perform()


# Upload File
