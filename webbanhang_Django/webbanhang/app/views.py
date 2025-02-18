from django.shortcuts import render, redirect
from django.http import HttpResponse, JsonResponse
from .models import *
import json
from django.contrib.auth.forms import UserCreationForm # form cho user
from django.contrib.auth import authenticate, login, logout
from django.contrib import messages
#from django.shortcuts import render, get_object_or_404

# from app.models import Product
# Create your views here.

# Chi tiết sản phẩm (detail)
def detail(request):
    categories = Category.objects.filter(is_sub=False)
    if request.user.is_authenticated:
        customer = request.user
        order,created = Order.objects.get_or_create(customer=customer,complete=False)
        items = order.orderitem_set.all()
        cartItems = order.get_cart_items
        user_not_login = "hidden"
        user_login = "show"
    else:
        items = []
        order = {'get_cart_total':0,'get_cart_items':0}
        cartItems = order['get_cart_items']
        user_not_login = "show"
        user_login = "hidden"
    id = request.GET.get('id','')
    products = Product.objects.filter(id = id)
    categories = Category.objects.filter(is_sub = False)
    context={'products':products,'items':items,'order':order,'cartItems':cartItems,'user_not_login':user_not_login,'user_login':user_login,'categories':categories}
    return render(request,'app/detail.html',context)
    


# Danh mục
def category(request):
    categories = Category.objects.filter(is_sub=False)
    active_category = request.GET.get('category','')
    if active_category:
        products = Product.objects.filter(category__slug=active_category)
    context={'products':products,'categories':categories, 'active_category':active_category}
    return render(request,'app/category.html',context)

#tim kim
def search(request):
    if request.method == 'POST':
        searched = request.POST["searched"]
        keys = Product.objects.filter(name__contains=searched)
    if request.user.is_authenticated:
        customer = request.user
        order,created = Order.objects.get_or_create(customer=customer,complete=False)
        items = order.orderitem_set.all()
        cartItems = order.get_cart_items
        user_not_login = "hidden"
        user_login = "show"
    else:
        items = []
        order = {'get_cart_total':0,'get_cart_items':0}
        cartItems = order['get_cart_items']
        user_not_login = "show"
        user_login = "hidden"
    products = Product.objects.all()
    categories = Category.objects.filter(is_sub = False)
    return render(request, 'app/search.html',{"searched":searched,"keys":keys,"products":products,"cartItems":cartItems,"user_not_login":user_not_login,"user_login":user_login,"categories":categories})

# def register(request):
#     form = CreateUserForm()
#     if request.method == 'POST':
#         form = CreateUserForm(request.POST)
#         if form.is_valid():
#             form.save()
#             return redirect('login')
#     context = {'form':form, }
#     return render(request, 'app/register.html',context)
def register(request):
    if request.user.is_authenticated:
        return redirect('home')  # Nếu đã đăng nhập, chuyển hướng về trang chủ

    form = CreateUserForm()

    # Đảm bảo lấy dữ liệu giỏ hàng nếu có
    order = {}  # Thay thế bằng logic lấy order thực tế
    cartItems = order.get('get_cart_items', 0)  # Tránh lỗi nếu order không tồn tại

    if request.method == 'POST':
        form = CreateUserForm(request.POST)
        if form.is_valid():
            form.save()
            messages.success(request, "Account created successfully. You can now log in.")
            return redirect('login')
        else:
            messages.error(request, "There was an error creating your account. Please check the form.")

    context = {
        'form': form,
        'cartItems': cartItems  # Thêm cartItems vào context để truyền vào template
    }
    return render(request, 'app/register.html', context)


def loginPage(request):
    if request.user.is_authenticated:
        return redirect('home')
    user_not_login = "show"
    user_login = "hidden"
    order = {}  # Cần thay thế bằng logic lấy order thực tế
    cartItems = order.get('get_cart_items', 0)

    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        user = authenticate(request,username=username,password=password)
        if user is not None:
            login(request,user)
            return redirect('home')
        else: messages.error(request,'Username or password is incorrect')
    
    
    context = {'user_not_login':user_not_login,'user_login':user_login,'cartItems':cartItems}
    return render(request, 'app/login.html',context)

def logoutPage(request):
    logout(request)
    return redirect('login')

def home(request):
    if request.user.is_authenticated:
        customer = request.user
        order,created = Order.objects.get_or_create(customer=customer,complete=False)
        items = order.orderitem_set.all()
        cartItems = order.get_cart_items
        user_not_login = "hidden"
        user_login = "show"
    else:
        items = []
        order = {'get_cart_total':0,'get_cart_items':0}
        cartItems = order['get_cart_items']
        user_not_login = "show"
        user_login = "hidden"
    categories = Category.objects.filter(is_sub = False)
    
    products = Product.objects.all()
    context={'products':products,'cartItems':cartItems,'user_not_login':user_not_login,'user_login':user_login,'categories':categories}
    return render(request, 'app/home.html',context)

def cart(request):
    categories = Category.objects.filter(is_sub=False)
    if request.user.is_authenticated:
        customer = request.user
        order,created = Order.objects.get_or_create(customer=customer,complete=False)
        items = order.orderitem_set.all()
        cartItems = order.get_cart_items
        user_not_login = "hidden"
        user_login = "show"
    else:
        items = []
        order = {'get_cart_total':0,'get_cart_items':0}
        cartItems = order['get_cart_items']
        user_not_login = "show"
        user_login = "hidden"
        categories = Category.objects.filter(is_sub = False)
    context={'items':items,'order':order,'cartItems':cartItems,'user_not_login':user_not_login,'user_login':user_login,'categories':categories}
    return render(request,'app/cart.html',context)

def checkout(request):
    categories = Category.objects.filter(is_sub=False)
    if request.user.is_authenticated:
        customer = request.user
        order,created = Order.objects.get_or_create(customer=customer,complete=False)
        items = order.orderitem_set.all()
        cartItems = order.get_cart_items
        user_not_login = "hidden"
        user_login = "show"
    else:
        items = []
        order = {'get_cart_total':0,'get_cart_items':0}
        cartItems = order['get_cart_items']
        user_not_login = "show"
        user_login = "hidden"
        categories = Category.objects.filter(is_sub = False)
    context={'items':items,'order':order,'cartItems':cartItems,'user_not_login':user_not_login,'user_login':user_login,'categories':categories}
    return render(request,'app/checkout.html',context)

def updateItem(request):
    data = json.loads(request.body)
    productId = data['productId']
    action = data['action']
    customer = request.user
    product = Product.objects.get(id=productId)
    order,created = Order.objects.get_or_create(customer=customer,complete=False)
    orderItem,created = OrderItem.objects.get_or_create(order=order,product=product)
    
    if action == 'add':
        orderItem.quantity = (orderItem.quantity + 1)
    elif action == 'remove':
        orderItem.quantity = (orderItem.quantity - 1)
    orderItem.save()
    if orderItem.quantity <= 0:
        orderItem.delete()

    return JsonResponse('Item was added',safe=False)



def intro(request):
    # Lấy danh mục từ cơ sở dữ liệu
    categories = Category.objects.filter(is_sub = False)

    context = {
        'page_title': 'Introduction Page',  # Tiêu đề trang
        'message': 'Welcome to the Intro Page!',  # Thông điệp
        'categories': categories  # Thêm danh mục vào context
    }

    return render(request, 'app/intro.html', context)

def learnmore(request):
    # Lấy danh mục từ cơ sở dữ liệu
    categories = Category.objects.filter(is_sub = False)

    context = {
        'page_title': 'Learn More Page',  # Tiêu đề trang
        'message': 'Welcome to the Learn More Page!',  # Thông điệp
        'categories': categories  # Thêm danh mục vào context
    }

    return render(request, 'app/learnmore.html', context)

