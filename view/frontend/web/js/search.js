define([
    "immohsin_magento2/js/slang",
], function(){
        "use strict";
        return function() {
            console.log(SlangRetailAssistant.VERSION);
            SlangRetailAssistant.init({
              assistantID: "cd878940e3404aa6b2827d9e11b7f931",
              apiKey: "63382faf0bf14ffdb19d5df89999e39f",
              requestedLocales: ["en-IN", "hi-IN"]
            });
            SlangRetailAssistant.setAppDefaultSubDomain(
              SlangRetailAssistant.AssistantSubdomains.RETAIL
            );
            SlangRetailAssistant.ui.show();

            SlangRetailAssistant.setAction({
              onSearch: (searchInfo, searchUserJourney) => {
                searchUserJourney.setSuccess();
                var product = searchInfo.item.productType;
                window.location.href = "/magento/index.php/catalogsearch/result/?q=product".replace("product", product);
                return searchUserJourney.AppStates.SEARCH_RESULTS;
              },
              onNavigation: (navigationInfo, navigationUserJourney) => {
                  switch(navigationInfo.target) {
                    case "home": {
                      window.location.href = "/magento/index.php";
                      break;
                    }
                    case "back": {
                      window.history.back();
                      break;
                    }
                  }
                  SlangRetailAssistant.AssistantUserJourneys.RETAIL_NAVIGATION;
                  navigationUserJourney.setNavigationSuccess();
                  return navigationUserJourney.AppState.NAVIGATION;
              },
              onAssistantError: (error) => {
                console.error(error)
              }
        })
      }
    }
)