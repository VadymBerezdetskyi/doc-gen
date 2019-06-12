## General 
**Code:** `kp-kharkivski-teplovi-merezhi-gariache-vodopostachannia_uah`  
**Method:** `kp-kharkivski-teplovi-merezhi-gariache-vodopostachannia`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] No. of special rakhunka # PIB # Addresses # Period  
: [uk] № Особовий Рахунок # ПІБ # Адреси # Період  
: [ru] № лицевого счета # ФИО # Адрес # Период  
Hint:  
: [en] No. of special rakhunka # PIB # Addresses # Period  
: [uk] № Особовий Рахунок # ПІБ # Адреси # Період  
: [ru] № лицевого счета # ФИО # Адрес # Период  
## JSON Object 
```json
 {"code":"kp-kharkivski-teplovi-merezhi-gariache-vodopostachannia_uah","method":"kp-kharkivski-teplovi-merezhi-gariache-vodopostachannia","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"No. of special rakhunka # PIB # Addresses # Period","uk":"\u2116 \u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0420\u0430\u0445\u0443\u043d\u043e\u043a # \u041f\u0406\u0411 # \u0410\u0434\u0440\u0435\u0441\u0438 # \u041f\u0435\u0440\u0456\u043e\u0434","ru":"\u2116 \u043b\u0438\u0446\u0435\u0432\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430 # \u0424\u0418\u041e # \u0410\u0434\u0440\u0435\u0441 # \u041f\u0435\u0440\u0438\u043e\u0434"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"No. of special rakhunka # PIB # Addresses # Period","uk":"\u2116 \u041e\u0441\u043e\u0431\u043e\u0432\u0438\u0439 \u0420\u0430\u0445\u0443\u043d\u043e\u043a # \u041f\u0406\u0411 # \u0410\u0434\u0440\u0435\u0441\u0438 # \u041f\u0435\u0440\u0456\u043e\u0434","ru":"\u2116 \u043b\u0438\u0446\u0435\u0432\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430 # \u0424\u0418\u041e # \u0410\u0434\u0440\u0435\u0441 # \u041f\u0435\u0440\u0438\u043e\u0434"},"example":"1234#\u041f\u0435\u0442\u0440\u043e\u0432 \u0410.\u0410.#\u0432\u0443\u043b. \u041c\u0430\u043b\u0430,2,\u043a\u0432.1#05.06.17"}],"amount_min":2,"amount_max":14999}```  
