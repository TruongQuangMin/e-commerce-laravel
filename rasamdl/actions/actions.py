# This files contains your custom actions which can be used to run
# custom Python code.
#
# See this guide on how to implement these action:
# https://rasa.com/docs/rasa/custom-actions


# This is a simple example for a custom action which utters "Hello World!"

# from typing import Any, Text, Dict, List

# from rasa_sdk import Action, Tracker
# from rasa_sdk.executor import CollectingDispatcher

# class ActionShowProduct(Action):

#     def name(self) -> Text:
#         return "action_show_product"

#     def run(self, dispatcher: CollectingDispatcher,
#             tracker: Tracker,
#             domain: Dict[Text, Any]) -> List[Dict[Text, Any]]:

#         product_name = tracker.get_slot("pro_name")
#         dispatcher.utter_message(f"Searching for product: {product_name}")

        # if product_name:
        #     try:
        #         response = requests.get(f"http://127.0.0.1:8000/search-products?name={product_name}")
        #         response.raise_for_status()  # This will raise an exception for HTTP errors
        #         product_data = response.json()

        #         if product_data:
        #             message = f"Thông tin sản phẩm: {product_data['title']} - Trạng thái: {product_data['status']}"
        #             dispatcher.utter_message(text=message)
        #         else:
        #             dispatcher.utter_message(text="Không tìm thấy sản phẩm nào phù hợp.")
        #     except Exception as e:
        #         logger.error(f"Failed to retrieve or parse product data: {e}")
        #         dispatcher.utter_message(text="Lỗi khi truy cập dữ liệu sản phẩm.")
        # else:
        #     dispatcher.utter_message(text="Bạn chưa cung cấp tên sản phẩm cần tìm.")
        #     logger.error("Product name slot is empty.")
        # return []
