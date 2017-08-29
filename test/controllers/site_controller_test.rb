require 'test_helper'

class SiteControllerTest < ActionDispatch::IntegrationTest
  test "should get index" do
    get site_index_url
    assert_response :success
  end

  test "should get about" do
    get site_about_url
    assert_response :success
  end

  test "should get events" do
    get site_events_url
    assert_response :success
  end

  test "should get executives" do
    get site_executives_url
    assert_response :success
  end

  test "should get documents" do
    get site_documents_url
    assert_response :success
  end

  test "should get registration" do
    get site_registration_url
    assert_response :success
  end

  test "should get contact" do
    get site_contact_url
    assert_response :success
  end

end
