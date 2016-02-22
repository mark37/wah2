// node_modules/satellizer/satellizer.js


local.login = function(user, redirect) {
    var loginUrl = config.baseUrl ? utils.joinUrl(config.baseUrl, config.loginUrl) : config.loginUrl;
    return $http.post(loginUrl, user).then(function(response) {
        shared.setToken(response, redirect);
        return response;
});
