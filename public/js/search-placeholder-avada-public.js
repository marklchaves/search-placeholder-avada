// TO DO: Select input type="search" only
const defSearchSelectors = [
  ".s", // Avada
  ".search-field", // Twenty Twenty family
];
const searchSelectors = php_vars.search_selectors ? [...defSearchSelectors, ...php_vars.search_selectors.split()].toString() : defSearchSelectors;
const searchInputs = document.querySelectorAll(searchSelectors);
searchInputs.forEach(si => si.placeholder = php_vars.search_placeholder);