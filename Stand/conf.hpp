#pragma once

// Config

#define STAND_NAME "Stand"
#define STAND_VERSION_TARGET "26.11.2"
//#define STAND_RN_VERSION_TARGET "💯"
//#define STAND_BRANCH "updating1"

#define GTA_VERSION_TARGET "1.73-3889.0"

// IDA dump base address, should end on 0000:
#define GTA_DUMP_BASE 0x7FF6F8B40000

// Development macros

#ifdef STAND_DEBUG
#define IDA_ADDR(addr) reinterpret_cast<void*>(::Stand::g_gta_module.base().as<uintptr_t>() + (0x##addr - GTA_DUMP_BASE))
#define GET_GTA_OFFSET(ptr) ((uintptr_t)(ptr) - ::Stand::g_gta_module.base().as<uintptr_t>())
#define TO_IDA_ADDR(ptr) reinterpret_cast<void*>(GTA_DUMP_BASE + GET_GTA_OFFSET(ptr))
#endif

// Force dev build to use "dev" branch

#ifdef STAND_DEV
#ifdef STAND_BRANCH
#undef STAND_BRANCH
#endif
#define STAND_BRANCH "dev"
#endif

// Determine full branch name

#ifdef STAND_BRANCH
#ifdef STAND_DEBUG
#define STAND_FULL_BRANCH STAND_BRANCH "dbg"
#else
#define STAND_FULL_BRANCH STAND_BRANCH
#endif
#elif defined(STAND_DEBUG)
#define STAND_FULL_BRANCH "dbg"
#endif

// Determine version target for root name

#ifndef STAND_RN_VERSION_TARGET
#define STAND_RN_VERSION_TARGET STAND_VERSION_TARGET
#endif

// Determine full version string

#ifdef STAND_FULL_BRANCH
#define STAND_VERSION STAND_VERSION_TARGET "-" STAND_FULL_BRANCH
#else
#define STAND_VERSION STAND_VERSION_TARGET
#endif

#ifdef STAND_FULL_BRANCH
#define STAND_RN_VERSION STAND_RN_VERSION_TARGET "-" STAND_FULL_BRANCH
#else
#define STAND_RN_VERSION STAND_RN_VERSION_TARGET
#endif

// Full name + version string

#define STAND_NAMEVERSION		STAND_NAME " " STAND_VERSION
#define STAND_RN_NAMEVERSION	STAND_NAME " " STAND_RN_VERSION
